<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "projet", 4306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if cin is set
if (!isset($_GET['cin'])) {
    echo "No coach selected for deletion.";
    exit;
}

$cin = $_GET['cin'];

$delete = "DELETE FROM coach WHERE cin = '$cin'";

if ($conn->query($delete)) {
    header("Location: billing.php");
    exit;
} else {
    echo "Delete failed: " . $conn->error;
}
?>
