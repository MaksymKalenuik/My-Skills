<?php
$stack=array(1,2,5,3,2,1,4,6,6,5,4,3,2,2,4,5,6,7);
$arr=array_count_values($stack);
$res=array_unique($arr);
echo "Program pokazuję ile są jednakowych elementów.";
print_r($res);
?>