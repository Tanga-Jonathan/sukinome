
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aswtdb";



$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO clients (username, FirstName, LastName) VALUES ('$username', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>



