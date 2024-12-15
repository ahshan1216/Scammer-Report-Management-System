<?php
header('Content-Type: application/json; charset=UTF-8');

// Include database connection
include '../db.php';

// Get input data
$data = json_decode(file_get_contents("php://input"), true);

// Check for valid JSON input
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(["error" => "Invalid JSON input"]);
    exit;
}

$query = mysqli_real_escape_string($conn, trim($data['query'] ?? ''));

// Check if the query is empty
if (empty($query)) {
    echo json_encode(["message" => "Please enter a search term."]);
    exit;
}

// Set character set for UTF-8 encoding
$conn->set_charset("utf8mb4");

$results = [];

// Search for matches in the database with approve = 1
$sql = "SELECT *         FROM search 
        WHERE (page_name LIKE ? OR page_number LIKE ?) AND approve = 1";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo json_encode(["error" => "SQL error: " . $conn->error]);
    exit;
}

// Bind search term
$searchTerm = '%' . $query . '%';
$stmt->bind_param("ss", $searchTerm, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Fetch results
while ($row = $result->fetch_assoc()) {
    $results[] = $row; // Collect all matching rows
}

// Return JSON response with encoding support
if (!empty($results)) {
    echo json_encode(["results" => $results], JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(["message" => "No matching records found."]);
}

// Clean up
$stmt->close();
$conn->close();
?>
