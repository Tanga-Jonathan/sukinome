<?php

require_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cards</title>
<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
<button class='btn btn-success'><a href='clientForm.php' class='text-light'>Add Customer</a></button>    

$query = "SELECT * FROM clients";
$result = mysqli_query($connect, $query);


echo "<div class='container'>

if($result){
    while($row = mysqli_fetch_assoc($result)){
      $id = $row ['id'];
      $Uname = $row ['UserName'];
      $Fname = $row ['First_Name'];
      $Lname = $row ['Last_Name'];
      $pass = $row ['Pwd'];
      $mail = $row ['Email'];
   


    <table class='table table-hover'>
    <thead>
    <tr>
      <th scope='col'>".$id."</th>
      <th scope='col'>User Name</th>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Password</th>
      <th scope='col'>Email</th>
      <th scope='col'>Operation</th>
    </tr>
  </thead>
  <tbody>
    
  <tr>
    <th scope='row'>".$id."</th>
    <td>".$Uname."</td>
    <td>".$Fname."</td>
    <td>".$Lname."</td>
    <td>".$pass."</td>
    <td>".$mail."</td>
    <td><button class='btn btn-primary'> <a href='update.php?upda=".$id."' class='text-light' >Update</a></button>
    </td>
    <td><button class='btn btn-danger'> <a href='delete.php?del=".$id."' class='text-light' >Delete</a></button>
    </td>
  </tr>
</tbody>




<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
?>