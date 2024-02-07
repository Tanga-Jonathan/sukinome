<?php


require_once 'dbConnection.php';

$query = "INSERT INTO clients (UserName, FirstName, Password) VALUES (?, ?, ?)";

$preparedStat = mysqli_prepare($connect, $query);
if (!$preparedStat){
    die("Prepare failed: ". mysqli_error($connect));
}
//bind
$User = $_POST["UserName"];
$First = $_POST["FirstName"];
$pass = $_POST["Password"];

mysqli_stmt_bind_param($preparedStat,"sss",$pass,$First,$User);

// execute

if(mysqli_stmt_execute($preparedStat)){
echo "success";
}
else{
    die("execute fail" . mysqli_error($connect));
}
// $que = $connect->prepare($query);


// // bind statement
// $val = "Kamajo";
// $val2 = "Tanga";

// $que->bind_param("ss",$val, $val2);

// //execute statement
// $que->execute();
// if ($que->affected_rows > 0){
//     echo "Record entered";
// }
// else{
//     echo "error " . $que->error;
// }
// $que->close();
// $connect->close();




?>







?>