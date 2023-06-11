<?php
// when you click on link poglej it will show you its specific training where you can add a comment and like it
require_once 'baza.php';
require_once 'cookie.php';
$sql = 'SELECT * FROM treningi;';
$result = mysqli_query($link, $sql);

$poglej = $_GET['id'];
$sql2 = 'SELECT * FROM treningi WHERE id = ' . $poglej . ';';
$result2 = mysqli_query($link, $sql2);
$row2 = mysqli_fetch_array($result2);
echo '<h1>' . $row2['ime'] . '</h1>';
echo '<h2>' . $row2['opis'] . '</h2>';
echo '<h3>' . $row2['datum'] . '</h3>';
$sql3 = 'SELECT kraj FROM kraji WHERE id = ' . $row2['kraj_id'] . ';';
$result3 = mysqli_query($link, $sql3);
$row3 = mysqli_fetch_array($result3);
echo '<h4>' . $row3['kraj'] . '</h4>';
$sql4 = 'SELECT lokacija FROM lokacije WHERE id = ' . $row2['lokacija_id'] . ';';
$result4 = mysqli_query($link, $sql4);
$row4 = mysqli_fetch_array($result4);
echo '<h5>' . $row4['lokacija'] . '</h5>';
$sql5 = 'SELECT ime FROM uporabniki WHERE id = ' . $row2['uporabnik_id'] . ';';
$result5 = mysqli_query($link, $sql5);
$row5 = mysqli_fetch_array($result5);
echo '<h6>' . $row5['ime'] . '</h6>';
if ($row2['slika_id'] != null) {
    $sql6 = 'SELECT url FROM slike WHERE id = ' . $row2['slika_id'] . ';';
    $result6 = mysqli_query($link, $sql6);
    $row6 = mysqli_fetch_array($result6);
    echo '<img src="slike/' . $row6['url'] . '" alt="" width="100px">';
} else {
    echo '<img src="slike/default.jpg" alt="" width="100px">';
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<a href="treningi_overlook.php">Nazaj</a>';


?>
