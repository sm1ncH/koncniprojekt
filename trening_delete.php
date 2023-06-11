<?php
// delete trening
require_once 'baza.php';
require_once 'cookie.php';
$id = $_GET['id'];
$sql = "DELETE FROM treningi WHERE id=$id;";
mysqli_query($link, $sql);
header('Location: treningi_overlook.php');
?>