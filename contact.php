<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$firstname = "$_POST[firstname]";
$lastname = "$_POST[lastname]";
$subject = "$_POST[subject]";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (firstname, lastname, subject)
VALUES ('$firstname', '$lastname', '$subject')";

if ($conn->query($sql) === TRUE) {
     echo " New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
header('Location: contact.php');
 
?>