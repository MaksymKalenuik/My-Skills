<?php
$link=mysqli_connect("localhost", "root", "", "zadanie");


if(isset($_POST['submit']))
{
    $query = mysqli_query($link,"SELECT username, password FROM zadanie WHERE username='".mysqli_real_escape_string($link,$_POST['username'])."'");
    $data = mysqli_fetch_assoc($query);
    if(isset($data)){
        $data = mysqli_fetch_assoc($query);
        header("Location: check.php");
        exit();
    }else {
        echo"Nie pobrano dane z bd";
    }
    }
    else {
        print "Nieprawidłoły login lub hasło";
    }
?>