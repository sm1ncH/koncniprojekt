<?php
require_once 'baza.php';
require_once 'cookie.php';

$ime = $_POST['name'];
$priimek = $_POST['surname'];
$email = $_POST['email'];
$geslo = $_POST['password'];
$kraj_id = $_POST['kraj'];

if($kraj_id == "nikraja"){
    echo "<script type='text/javascript'>alert('Nisi izbral kraja!');
        window.location.href='signup.php';
        </script>";
}

$sql = 'SELECT * FROM uporabniki WHERE email = "'.$email.'";';
$result= mysqli_query($link, $sql);

if (mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>alert('Uporabnik s tem emailom že obstaja!');
        window.location.href='signup.php';
        </script>";
}
else{
    echo "<script type='text/javascript'>alert('Uspešna registracija!');
        window.location.href='signup.php';
        </script>";
    $query = "INSERT INTO uporabniki (ime, priimek, email, geslo,  kraj_id) VALUES ('$ime', '$priimek', '$email', '$geslo',  '$kraj_id');";
    mysqli_query($link, $query);
    $_SESSION['idu']=$row['id'];
    $_SESSION['name']=$row['ime'];
    $_SESSION['surname']=$row['priimek'];
    $_SESSION['mail']=$row['email'];
}