<?php
// Connect to your database (replace with your database credentials)
require_once "dbConnection.php";



$sql = "DELETE FROM clients WHERE id = ? ";

    if (mysqli_query($connect, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
    }
}

// Close the database connection
$conn->close();
?>
