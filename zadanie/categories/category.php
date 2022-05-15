<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'zadanie2';

$id_cat =$_POST['id_cat'];
$category_name = $_POST['category_name'];
$priority = $_POST['priority'];
$subcategory = $_POST['subcategory'];

$link = new mysqli($servername, $username, $password, $dbname);

if ($link->connect_error) {
    die('Connection die' . $link->connect_error);
}
if (!$link) {
    echo 'error';
} else {
    echo 'conected';
}
if (isset($_POST['submit'])) {
    $query_catepgory = mysqli_query($link, "INSERT INTO category (id_cat, name_cat, priority, subcategory)VALUES
                                                                    ('$id_cat', '$category_name', '$priority', '$subcategory')");
    header('Location: resultCategory.php');

}
if (isset($_POST['submit2'])) {
    header('Location: resultCategory.php');
}
?>
