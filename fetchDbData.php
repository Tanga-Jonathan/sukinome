<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cards</title>
<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    
<?php

// fetch data
require_once "dbConnection.php";

$query = "SELECT * FROM clients";
$result = mysqli_query($connect, $query);


if($result){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row ['id'];
    $Uname = $row ['UserName'];
    $Fname = $row ['First_Name'];
    $Lname = $row ['Last_Name'];
    $pass = $row ['Pwd'];
    $mail = $row ['Email'];
 

  

    
 echo '<div class="container">


    <table class="table table-hover">
    <tr>
    <th scope = "$row" >'.$id.' </th>
        
        <td>'.$Uname.'</td>
        <td>'.$Fname.'</td>
        <td>'.$Lname.'</td>
        <td>'.$pass.'</td>
        <td>'.$mail.'</td>
  
        <button class="btn btn-primary " > <a href="update.php?upda='.$id.'" class="text-light href">Update</a></button>
        
        
        
        <button class="btn btn-danger text-light"><a href="delete.php?del='.$id.'" class="text-light href">Delete</a></button>  
  
        </tr>';
  echo'</table>';
  

  }
}





?>
<?php

echo "
<table class='table'>
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
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope='col'>".$id."</th>
      <th scope='col'>".$Uname."</th>
      <th scope='col'>".$Fname."</th>
      <th scope='col'>".$Lname."</th>
      <th scope='col'>".$pass."</th>
      <th scope='col'>".$mail."</th>
      <th scope='col'>Operation</th>
    </tr>
  </tbody>
</table>";
?>

<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>