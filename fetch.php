

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


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['secondName'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['telephone'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['avatar']) .
        "' width='50' height='50' alt='Avatar'></td>";

        echo '<td>';

    }
}

                                        ?>




                                    


<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>                                        