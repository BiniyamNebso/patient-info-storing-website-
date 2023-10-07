<?php
$hostname = "localhost"; // Change this if your MySQL server is running on a different host
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "INSERT INTO patients (name, age, gender) VALUES ('$name', $age, '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "Patient information stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
