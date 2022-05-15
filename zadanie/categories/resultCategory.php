<?php
$conn = mysqli_connect('localhost', 'root', '', 'zadanie2');
$sql = "SELECT * FROM category";
if ($result = $conn->query($sql)) {
    echo "<table><tr><th>Id</th><th> Name</th><th> Priority</th><th> Sub category</th></tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["id_cat"] . "</td>";
        echo "<td>" . $row["name_cat"] . "</td>";
        echo "<td>" . $row["priority"] . "</td>";
        echo "<td>" . $row["subcategory"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $result->free();
} else {
    echo "Error: " . $conn->error;
}


echo "<form method='post'>
        <input type='submit' value='Sortuj' name='submit3'>
    </form>";

if(isset($_POST['submit3'])||$res_cat=$conn->query($sql)){

    $cat_sort=array(
        $row["id_cat"],
        $row["name_cat"],
        $row["priority"],
        $row["subcategory"]);
    asort($cat_sort);
    foreach ($cat_sort as $key => $val) {
        $res="$key = $val\n";
    }

    echo"<table><tr><th>Priority  </th><th> Sub category</th></tr>";
    echo "<tr><td>".$row['priority']."</td>";
    echo "<td>".$row['subcategory']."</td></tr>";
    echo"</table>";
}



    $conn->close();
    ?>
