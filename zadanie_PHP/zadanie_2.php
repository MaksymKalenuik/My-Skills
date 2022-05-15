<form method="post">
<h1>Proszę wpisać liczbę od 0-9</h1>
<input type="text" maxlength="100"  name="liczba">
<input type="submit" value="Przycisk" name="btn" maxlength="10">
</form>
<?php
//chciałem sprobować ale wyświetla tylko pojedyncie
//
//function cyfra()
//{
//    if($_POST['liczba']==0) {
//        echo 'zero';
//        //$zero = "| |<br>|_|<br>";
//    }elseif($_POST['liczba']==1){
//        echo 'jeden';
//    }
//
//}
//if(isset($_POST['btn'])){
//    cyfra();
//}


//poprawnie działająca funkcja
$zero='<br>_<br>| .|<br>|_| <br>';
$jeden='<br> |<br>| <br> ';
$dwa='<br>_<br>  _|<br>|_ <br> ';
$trzy='<br>_<br> _|<br>_|<br> ';
$cztery='<br>|_|'.'<br>'.'...| <br>';
$piec='<br>_<br>|_<br>_| <br>';
$szesc='<br>_<br>|_<br>|_| <br>';
$siedem='<br>_<br>..|<br>..| <br>';
$osiem='<br>_<br>|_|<br>|_| <br>';
$dziewiec='<br>_<br>|_|<br>_|<br>';
$cyfry_repl=str_replace([0,1,2,3,4,5,6,7,8,9],[$zero ,$jeden,$dwa,$trzy,$cztery,$piec,$szesc,$siedem,$osiem,$dziewiec],$_POST['liczba']);
function replace(){

    if(isset($_POST['btn'])){
        global $cyfry_repl;
        echo $cyfry_repl;
    }
}
replace();

?>
