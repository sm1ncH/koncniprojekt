<?php
/* povezava na bazo */
$host='localhost';
$user= 'root';
$password='';
$db='projekt';
$link = mysqli_connect($host, $user, $password, $db)
        or die("povezava na strežnik ni uspela");
mysqli_set_charset($link, "utf-8");