<?php
require_once 'baza.php';
require_once 'cookie.php';

$ime = $_POST['ime'];
$opis = $_POST['opis'];
$datum = $_POST['datum'];
$tezavnost = $_POST['tezavnost'];
$kraj = $_POST['kraj'];
$lokacija = $_POST['lokacija'];
$img = $_POST['fileToUpload'];
$uporabnik = $_SESSION['idu'];
$sql = 'SELECT * FROM treningi WHERE opis = "'.$opis.'";';
$result= mysqli_query($link, $sql);
if(mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>alert('Trening already exists!');
    window.location.href='trening_ins.php';</script>";
}
else{
    $query = "INSERT INTO treningi (ime, opis, datum, tezavnost, kraj_id, lokacija_id, uporabnik_id)
     VALUES ('$ime', '$opis', '$datum', '$tezavnost' , (SELECT id FROM kraji k WHERE k.id = '$kraj'),
     (SELECT id FROM lokacije WHERE id = '$lokacija'), 
     (SELECT id FROM uporabniki WHERE id='$uporabnik'));";
    $result = mysqli_query($link, $query);
    
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    // } 
    // else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }
    // }
    header("Location:index.php");
}
