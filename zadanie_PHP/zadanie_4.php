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
$query = mysqli_query($conn,"SELECT name_lot FROM lotteries INNER JOIN draws WHERE draws.lottery_id=lotteries.id AND Year(draw_date) = '2021' and Month(draw_date) = '07' ");
$query2=mysqli_query($conn, "SELECT sum(tickets.id*ticket_price) FROM tickets INNER JOIN lotteries ");

while($data = mysqli_fetch_assoc($query)){
    echo "<td>";
    echo"<tr>";
    echo "Nazwa loterii ";
    print_r(implode( " ",$data));
    echo "</tr>";
    echo "</td>";
    echo'<br>';
}
$data2= mysqli_fetch_assoc($query2);
    echo "<td>";
    echo"<tr>";
    echo "Przychód ";
    print_r(implode("",$data2));
    echo "</tr>";
    echo "</td>";
    echo'<br>';

