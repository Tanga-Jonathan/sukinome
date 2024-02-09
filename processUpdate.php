<?php

require_once "dbConnection.php";

$que = "UPDATE clients SET Username = 'Majegere' WHERE Id = 4";

if (mysqli_query($connect,$que)){
    echo "successful Update, check the Database.";
}
else
    echo "Failure of update:" . mysqli_error($connect);

?>