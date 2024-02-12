<?php


require_once 'dbConnection.php';

$user = $_POST['User_Name'];
$Fname = $_POST['Firstname'];
$Lname = $_POST['LastName'];
$pass = $_POST['password'];
$rpass = $_POST['password'];
$mail = $_POST['email'];

$query = "INSERT INTO clients
(User, First_Name, Last_Name, Password, Re_password,Email)
 VALUES (?,?,?,?,?,?)";
$result = mysqli_stsmt_init($connect);

$result = mysqli_prepare($connect,$query);



mysqli_stmt_bind_param($result, 'ssssss', 
                        $user, 
                        $Fname, 
                        $Lname,
                        $pass, 
                        $rpass, 
                        $mail);
 
mysqli_stmt_execute($result);
 
 mysqli_close($connect);

?>