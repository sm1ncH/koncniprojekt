<?php
require_once 'baza.php';
require_once 'cookie.php';
$id = $_POST['id'];
$ime = $_POST['ime'];
$opis = $_POST['opis'];
$datum = $_POST['datum'];
$kraj = $_POST['kraj'];
$lokacija = $_POST['lokacija'];
$sql = "UPDATE treningi SET ime='$ime', opis='$opis', datum='$datum', kraj_id = (select id from kraji k where k.id = '$kraj'), lokacija_id = (SELECT id FROM lokacije l WHERE id='$lokacija')";
mysqli_query($link, $sql);
header("Location: treningi_overlook.php");
?>
