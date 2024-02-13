<?php
// Connect to your database (replace with your database credentials)
require_once "dbConnection.php";

if(isset($_GET['del'])){
    $id=$_GET['del'];



$sql = "DELETE FROM clients WHERE id = $id ";

$result = mysqli_query($connect,$sql);
if ($result){
    echo "deleted successfully";
header('location:fetchDbData.php');
}
}
// Close the database connection
$conn->close();
?>
