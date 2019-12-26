<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$firstname = "$_POST[firstname]";
$email = "$_POST[email]";
$street = "$_POST[street]";
$city = "$_POST[city]";
$zip = "$_POST[zip]";
$passengers = "$_POST[passengers]";
$selecttour = "$_POST[selecttour]";
$arrive = "$_POST[arrive]";
$depart = "$_POST[depart]";
$trip = "$_POST[trip]";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO booking (firstname, email, street, city, zip, passengers, selecttour, arrive, depart, trip)
VALUES ('$firstname', '$email', '$street', '$city', '$zip', '$passengers', '$selecttour', '$arrive', '$depart', '$trip')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: paymentt.php');
?>