<?php
require "indexgit.html";
echo "Program zlicza wszystkie liczby nagrane przez użytkownika\n";
$number = ($_POST["user_number"]);
$sum = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $sum+=$number[$i];
}
//echo print_r($sum);
echo "<br>";
echo "Liczba: {$number}\n";
echo "Result: {$sum}\n";

?>