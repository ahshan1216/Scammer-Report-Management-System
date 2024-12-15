<?php
header("Content-Type: application/json");

// Include database connection
include '../db.php';

// Get form data
$name = isset($_POST['customName']) ? trim($_POST['customName']) : "";
$email = isset($_POST['customEmail']) ? trim($_POST['customEmail']) : "";
$phone = isset($_POST['customPhone']) ? trim($_POST['customPhone']) : "";
$page_phone = isset($_POST['PagePhoneNumber']) ? trim($_POST['PagePhoneNumber']) : "";
$page_name = isset($_POST['customPageName']) ? trim($_POST['customPageName']) : "";
$page_link = isset($_POST['Pagelink']) ? trim($_POST['Pagelink']) : "";
$details = isset($_POST['details']) ? trim($_POST['details']) : "";


// Validate inputs
if (empty($name) || empty($email) || empty($phone)) {
    echo json_encode([
        "success" => false,
        "error" => "All fields are required."
    ]);
    exit();
}

// Upload files and prepare content field
$contentField = [];
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

if (!isset($_FILES['renamed_files'])) {
    echo json_encode(["success" => false, "error" => "No files uploaded."]);
    exit();
}

foreach ($_FILES['renamed_files']['tmp_name'] as $key => $tmpName) {
    $fileName = basename($_FILES['renamed_files']['name'][$key]);
    $fileSize = $_FILES['renamed_files']['size'][$key]; // Get file size

    // Check file size
    if ($fileSize > 10 * 1024 * 1024) { // 10 MB limit
        echo json_encode([
            "success" => false,
            "error" => "File '$fileName' exceeds the maximum allowed size of 10 MB."
        ]);
        exit();
    }

    $filePath = $uploadDir . $fileName;

    // Move uploaded file
    if (move_uploaded_file($tmpName, $filePath)) {
        $contentField[] = $fileName;
    }
}

// Save to database
$contentString = implode("|", $contentField);
$sql = "INSERT INTO search (victim_name, victim_email, victim_number, content, page_name, page_link, details,page_number)
        VALUES (?, ?, ?, ?, ?, ?, ?,?)";
$stmt = $conn->prepare($sql);

// Bind parameters: "sssssss" indicates 7 string parameters
$stmt->bind_param("sssssssi", $name, $email, $phone, $contentString, $page_name, $page_link, $details,$page_phone);


if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => "Database error: " . $conn->error]);
}

$stmt->close();
$conn->close();

?>
