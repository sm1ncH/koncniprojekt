<?php
require_once 'baza.php';
require_once 'cookie.php';
$id = $_POST['id'];
$ime = $_POST['ime'];
$opis = $_POST['opis'];
$datum = $_POST['datum'];
$kraj_id = $_POST['kraj_id'];
$lokacija_id = $_POST['lokacija_id'];
$uporabnik_id = $_POST['uporabnik_id'];
$sql = "UPDATE treningi SET ime='$ime', opis='$opis', datum='$datum', kraj_id='$kraj_id', lokacija_id='$lokacija_id', uporabnik_id='$uporabnik_id' WHERE id=$id;";
mysqli_query($link, $sql);
header("Location: treningi_overlook.php");
?>
