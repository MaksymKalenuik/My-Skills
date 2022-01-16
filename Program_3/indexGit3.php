<?php
/*Napisz program który wyświetla pierwszy litery nazwiska oraz imię*/
require 'indexGit2.html';
echo "Program wyświetla pierwszy litery nazwiska oraz imię.\n";
echo "<br>";
$name=($_POST["user_name"]);
$nazwisko=($_POST["user_nazwisko"]);
$arr= substr($name, 0);
$arr2=substr($nazwisko, 0);
print_r($arr[0]. " ". $arr2[0]);

?>