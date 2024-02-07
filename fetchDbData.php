<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">

</head>
<body>
    
<?php

// fetch data
require_once "dbConnection.php";
$query = "SELECT * FROM clients";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<p> UserName: " . $row ["UserName"] . "</p>";

?>
<div class = "card">
<div class="card-header">
<?php $row["UserName"];  ?>
</div>
    <div class="card-body"><p>Nice work</p></div>
    <div class="card-footer"><?php  $row["UserName"];     ?></div>
</div>
<?php
}
}
?>


<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>