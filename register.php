<?php
require_once 'baza.php';
require_once 'cookie.php';

$ime = $_POST['name'];
$priimek = $_POST['surname'];
$email = $_POST['email'];
$geslo = $_POST['password'];
$kraj_id = $_POST['kraj'];

if($kraj_id == "nikraja"){
    echo "<p style='
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f1f1f1;
    '>Nisi izbral kraja!</p>";
    header("refresh:2;url=signup.php");
}

$sql = 'SELECT * FROM uporabniki WHERE email = "'.$email.'";';
$result= mysqli_query($link, $sql);

if (mysqli_num_rows($result)==1){
        echo "<p style='
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
        '>Uporabnik s tem emailom že obstaja!</p>";
        header("refresh:2;url=signup.php");
}
else{
        echo "<p style='
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
        '>Uspešna registracija!</p>";
        header("refresh:2;url=login.html");
    $query = "INSERT INTO uporabniki (ime, priimek, email, geslo,  kraj_id) VALUES ('$ime', '$priimek', '$email', '$geslo',  '$kraj_id');";
    mysqli_query($link, $query);
    $_SESSION['idu']=$row['id'];
    $_SESSION['name']=$row['ime'];
    $_SESSION['surname']=$row['priimek'];
    $_SESSION['mail']=$row['email'];
}