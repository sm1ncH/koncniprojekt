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
echo '<h1 style="
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #002233;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    "
">' . $row2['ime'] . '</h1>';
echo "<style>
    p {
        margin-left: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
    img {
        margin-left: 20px;
    }
    </style>";
echo '<p>' . $row2['opis'] . '</p>';
echo '<p>' . $row2['datum'] . '</p>';
$sql3 = 'SELECT kraj FROM kraji WHERE id = ' . $row2['kraj_id'] . ';';
$result3 = mysqli_query($link, $sql3);
$row3 = mysqli_fetch_array($result3);
echo '<p>' . $row3['kraj'] . '</p>';
$sql4 = 'SELECT lokacija FROM lokacije WHERE id = ' . $row2['lokacija_id'] . ';';
$result4 = mysqli_query($link, $sql4);
$row4 = mysqli_fetch_array($result4);
echo '<p>' . $row4['lokacija'] . '</p>';
$sql5 = 'SELECT ime FROM uporabniki WHERE id = ' . $row2['uporabnik_id'] . ';';
$result5 = mysqli_query($link, $sql5);
$row5 = mysqli_fetch_array($result5);
echo '<p>' . $row5['ime'] . '</p>';
if ($row2['slika_id'] != null) {
    $sql6 = 'SELECT url FROM slike WHERE id = ' . $row2['slika_id'] . ';';
    $result6 = mysqli_query($link, $sql6);
    $row6 = mysqli_fetch_array($result6);
    echo '<img src="' . $row6['url'] . '" alt="" width="100px">';
} else {
    echo '<img src="slike/default.jpg" alt="" width="100px">';
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<a style="
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #002233;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
    "
" href="treningi_overlook.php">Nazaj</a>';


?>
