<?php
session_start();
include('../db.php');  // Database connection file

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Initialize the search query and filter options
$searchTerm = "";
$showUnapproved = false;
$approveStatus = null;
$solvedStatus = null;

// Check if there is a search term from the user
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
}

// Check if the "Show Unapproved" checkbox is checked
if (isset($_GET['show_unapproved'])) {
    $showUnapproved = true;
}

// Check if the "Approve" checkbox is checked
if (isset($_GET['approve1'])) {
    $approveStatus = $_GET['approve1'] ? 1 : 0;  // 1 for approved, 0 for unapproved
}

// Check if the "Solved" checkbox is checked
if (isset($_GET['solved1'])) {
    $solvedStatus = $_GET['solved1'] ? 1 : 0;  // 1 for solved, 0 for unsolved
}

// Check if approve, solved or delete buttons were clicked
if (isset($_GET['approve']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $approve = $_GET['approve'] == '1' ? 1 : 0;
    $query = "UPDATE search SET approve = $approve WHERE id = $id";
    mysqli_query($conn, $query);
}

if (isset($_GET['solved']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $solved = $_GET['solved'] == '1' ? 1 : 0;
    $query = "UPDATE search SET solved = $solved WHERE id = $id";
    mysqli_query($conn, $query);
}

if (isset($_GET['delete']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM search WHERE id = $id";
    mysqli_query($conn, $query);
}


// Build the SQL query with a WHERE clause for search functionality
$query = "SELECT * FROM search WHERE (id LIKE '%$searchTerm%' OR page_name LIKE '%$searchTerm%' OR victim_name LIKE '%$searchTerm%' OR victim_number LIKE '%$searchTerm%')";

// If "Show Unapproved" is checked, add condition for approval status
if ($showUnapproved) {
    $query .= " AND approve = 0";
}

// If "Approve" is selected, add filter for approval status
if (isset($approveStatus)) {
    $query .= " AND approve = $approveStatus";
}

// If "Solved" is selected, add filter for solved status
if (isset($solvedStatus)) {
    $query .= " AND solved = $solvedStatus";
}

// Order results by ID descending
$query .= " ORDER BY id DESC";

// Query the database
$result = mysqli_query($conn, $query);
?>

<!-- Search Form with "Show Unapproved", "Approve", and "Solved" checkboxes -->
<form method="get" action="">
    <input type="text" name="search" placeholder="Search by ID, Page Name, Victim Name, Victim Number..." value="<?php echo $searchTerm; ?>">
    
    <!-- Checkbox for Show Unapproved -->
    <label for="show_unapproved">Show Unapproved</label>
    <input type="checkbox" name="show_unapproved" id="show_unapproved" <?php echo ($showUnapproved ? 'checked' : ''); ?>>

    <!-- Checkbox for Approve (Unapproved or Approved) -->
    <label for="approve">Approved</label>
    <input type="checkbox" name="approve1" id="approve" <?php echo (isset($approveStatus) && $approveStatus == 1 ? 'checked' : ''); ?>>

    <!-- Checkbox for Solved (Solved or Unsolved) -->
    <label for="solved">Solved</label>
    <input type="checkbox" name="solved1" id="solved" <?php echo (isset($solvedStatus) && $solvedStatus == 1 ? 'checked' : ''); ?>>

    <button type="submit">Search</button>
</form>

<?php
// Display the search results
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $page_name = $row['page_name'];
            $victim_name = $row['victim_name'];
            $victim_number = $row['victim_number'];
            $victim_email = $row['victim_email'];
            $details = $row['details'];
            $approve = $row['approve'];
            $solved = $row['solved'];
            $content = $row['content'];
            $page_link = $row['page_link'];

            echo "<div class='record'>";
            echo "<h3>Page Name: $page_name</h3>";
            echo "<p>Victim Name: $victim_name</p>";
            echo "<p>Victim Number: $victim_number</p>";
            echo "<p>Victim Email: $victim_email</p>";
            echo "<p>Details: $details</p>";
            echo "<p>Status: " . ($solved ? "Solved" : "Unsolved") . "</p>";

            // Approve toggle
            echo "<p>Approval Status: " . ($approve ? "Approved" : "Not Approved") . "</p>";
            echo "<a href='?approve=" . ($approve ? "0" : "1") . "&id=$id'>" . ($approve ? "Disapprove" : "Approve") . "</a> | ";

            // Solved toggle
            echo "<a href='?solved=" . ($solved ? "0" : "1") . "&id=$id'>" . ($solved ? "Mark as Unsolved" : "Mark as Solved") . "</a> | ";

            // Delete link
            echo "<a href='?delete=1&id=$id' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>";

            // Display content (images or other files)
            $images = explode('|', $content);  // Split by pipe symbol
            echo "<div class='images'>";
            foreach ($images as $image) {
                $imagePath = "../search/uploads/" . trim($image);  // Assuming images are stored in the 'uploads' folder
                $fileExtension = pathinfo($image, PATHINFO_EXTENSION);
                if (in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    // If it's an image, open it in a new tab
                    echo "<a href='$imagePath' target='_blank'><img src='$imagePath' alt='$image' width='100' height='100'></a>";
                } else {
                    // For non-image files, provide a download link
                    echo "<a href='$imagePath' download><button>Download $image</button></a>";
                }
            }
            echo "</div>";

            // Page link
            echo "<a href='$page_link' target='_blank'>View Page</a>";
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "Error retrieving records.";
}
?>
<style>
    /* General reset for margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fc;
    color: #333;
    margin: 20px;
}

/* Container for the search form and results */
.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Search Form Styles */
form {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 30px;
}

form input[type="text"] {
    width: 50%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

form label {
    font-size: 14px;
    margin-bottom: 5px;
}

form input[type="checkbox"] {
    margin-right: 5px;
    transform: scale(1.2);
}

form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

form button:hover {
    background-color: #0056b3;
}

/* Record Section Styles */
.record {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 20px;
    padding: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.record h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
}

.record p {
    font-size: 14px;
    margin-bottom: 8px;
}

.record a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    margin-right: 15px;
}

.record a:hover {
    text-decoration: underline;
}

/* Image Section */
.images {
    margin-top: 10px;
    margin-bottom: 15px;
}

.images img {
    border-radius: 8px;
    margin: 5px;
}

.images button {
    padding: 5px 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.images button:hover {
    background-color: #218838;
}

/* Confirmation Dialog */
a:active {
    opacity: 0.7;
}

/* No Results Message */
.no-results {
    text-align: center;
    font-size: 18px;
    color: #888;
    padding: 20px;
}

/* Pagination or additional links */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.pagination a {
    padding: 8px 15px;
    background-color: #007bff;
    color: white;
    margin: 0 5px;
    border-radius: 5px;
    text-decoration: none;
}

.pagination a:hover {
    background-color: #0056b3;
}

</style>