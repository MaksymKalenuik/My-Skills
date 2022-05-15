<form method="post">
    <h3>Wpisz date</h3>
<input type="date" maxlength="100" name="date">
    <br>
<input type="submit" value="Send" name="submit4">
</form>
<?php
function getMonthName($month)
{
    $Date = $_POST['date'];
    $month = date('F', strtotime($Date));
    echo $month;
        $monthName = array(
            "January" => " - Styczeń",
            "February" => " - Luty",
            "March" => " - Marzec",
            "April" => " - Kwiecień",
            "May" => " - Maj",
            "June" => " - Czerwiec",
            "July" => " - Lipiec",
            "August" => " - Sierpień",
            "September" => " - Wrzesień",
            "October" => " - Październik",
            "November" => " - Listopad",
            "December" => " - Grudzień"
        );
    return $monthName[$month];

}
echo getMonthName(date('F'));


?>
