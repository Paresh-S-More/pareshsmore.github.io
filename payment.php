<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$cardname = "$_POST[cardname]";
$cardnumber = "$_POST[cardnumber]";
$expmonth = "$_POST[expmonth]";
$expyear = "$_POST[expyear]";
$cvv = "$_POST[cvv]";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO payment (cardname, cardnumber, expmonth, expyear, cvv)
VALUES ('$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: payment.html');
?>