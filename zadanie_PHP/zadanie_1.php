<?php
//! ) " ( £ * % & > < @ a b c d e f g h i j k l m n o
//a b c d e f g h i j k l m n o p q r s t u v w x y z
//)g!ld, j(!ad "> h>£ gdol>!o!" o!(!c>£
$szyfr1 = ')g!ld, ';
$szyfr2='j(!ad "> h>£ ';
$szyfr3='gdol>!o!" o!(!c>£';
$result=str_replace(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'z'],
                    ['l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'o'],$szyfr1);
$result2 = str_replace(['!', ')', '"', '(', '£', '*', '%', '&', '>', '<', '@', ],
                       ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', ], $result);
echo $result2;
$result3=str_replace(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'w', 'm', 'n', 'z'],
                    ['l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'l', 'x', 'y', 'o'],$szyfr2);
$result4 = str_replace(['!', ')', '"', '(', '£', '*', '%', '&', '>', '<', '@', ],
                       ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', ], $result3);
echo $result4;
$result5=str_replace(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'y', 'o'],
                    ['l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'n', 'z'],$szyfr3);
$result6 = str_replace(['!', ')', '"', '(', '£', '*', '%', '&', '>', '<', '@', ],
                       ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', ], $result5);
echo $result6;
echo '<br>';



//Zrobiłem dwa wzory



$array=array(
    "!"=>"a",
    ")"=>"b",
    "\""=>"c",
    "("=>"d",
    "£"=>"e",
    "*"=>"f",
    "%"=>"g",
    "&"=>"h",
    ">"=>"i",
    "<"=>"j",
    "@"=>"k",
    "a"=>"l",
    "b"=>"m",
    "c"=>"n",
    "d"=>"o",
    "e"=>"p",
    "f"=>"q",
    "g"=>"r",
    "h"=>"s",
    "i"=>"t",
    "j"=>"u",
    "k"=>"v",
    "l"=>"w",
    "m"=>"x",
    "n"=>"y",
    "o"=>"z"
);
echo $array[')'];
echo $array['g'];
echo $array['!'];
echo $array['l'];
echo $array['d'].", ";
echo $array['j'];
echo $array['('];
echo $array['!'];
echo $array['a'];
echo $array['d']." ";
echo $array['"'];
echo $array['>']." ";
echo $array['h'];
echo $array['>'];
echo $array['£']." ";
echo $array['g'];
echo $array['d'];
echo $array['o'];
echo $array['l'];
echo $array['>'];
echo $array['!'];
echo $array['o'];
echo $array['!'];
echo $array['"']." ";
echo $array['o'];
echo $array['!'];
echo $array['('];
echo $array['!'];
echo $array['c'];
echo $array['>'];
echo $array['£'];
