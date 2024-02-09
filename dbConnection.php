<?php
 $db_host = "localhost";
 $db_rootUser = "root";
 $db_password = "";
 $db_name = "aswtdb";

     $connect = new mysqli ($db_host,$db_rootUser,$db_password,$db_name);
// if (!$connect){
//     echo "failure" . mysqli_connect_error();
// }
// echo "success!";
?>