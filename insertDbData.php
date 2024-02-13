<?php


require_once 'dbConnection.php';

$user = $_POST['User_Name'];
$Fname = $_POST['Firstname'];
$Lname = $_POST['LastName'];
$pass = $_POST['password'];

$mail = $_POST['email'];

$query = "INSERT INTO clients (UserName, First_Name, Last_Name, Pwd, Email)  VALUES (?,?,?,?,?)";
// $result = mysqli_stsmt_init($connect);

$stmt = mysqli_prepare($connect,$query);



mysqli_stmt_bind_param($stmt, 'sssss', 
                        $user, 
                        $Fname, 
                        $Lname,
                        $pass, 
                        $mail);
 
mysqli_stmt_execute($stmt);
 
if(stmt){
    echo "successfull entry";
}

 mysqli_close($connect);

?>