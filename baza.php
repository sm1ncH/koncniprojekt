<?php
/* povezava na bazo */
// $host='localhost';
// $user= 'root';
// $password='';
// $db='projekt';
// $link = mysqli_connect($host, $user, $password, $db)
//         or die("povezava na strežnik ni uspela");
// mysqli_set_charset($link, "utf-8"); -->


/* povezava na bazo */
$host='localhost';
$user= 'jurep_db';
$password='mawnez-cyfrYs-besxa5';
$db='jurep_koncniprojekt';
$link = mysqli_connect($host, $user, $password, $db)
        or die("povezava na strežnik ni uspela");
mysqli_set_charset($link, "utf-8");