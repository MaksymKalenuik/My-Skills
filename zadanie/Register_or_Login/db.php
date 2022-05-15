<?php
$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birth_day = $_POST['birth_day'];

$servername='localhost';
$username='root';
$password='';
$dbname='zadanie';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection die" . $conn->connect_error);
}
//registration
$sql = "INSERT INTO zadanie (username, password, email, firstname, lastname, birth_day)VALUES('$name','$pass', '$email', '$firstname', '$lastname', '$birth_day')";

if($conn->query($sql)===TRUE){
    echo "Info in DB";
}else {
    echo "ERROR". $sql. "<br>".$conn->error;
}

$conn->close();

?>