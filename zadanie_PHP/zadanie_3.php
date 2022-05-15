<?php
$servername='localhost';
$username='root';
$password='';
$dbname='zadanie_php';

$link= new mysqli($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Connection die" . $link->connect_error);
}
$conn=mysqli_connect('localhost', 'root','','zadanie_php');
$query = mysqli_query($conn,"SELECT * FROM draws WHERE lottery_id=2 ");
while($data = mysqli_fetch_assoc($query)){
    print_r( $data);
    echo'<br>';
}