<?php
require_once 'baza.php';
require_once 'cookie.php';

    $e=$_POST['email'];
    $p=$_POST['password'];
    $query = "SELECT * FROM uporabniki WHERE email='$e' AND geslo='$p';";
    $result= mysqli_query($link, $query);
    
    if(mysqli_num_rows($result)==1){
        // window popup
        echo "<p style='
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
        '>Uspešna prijava!</p>";
        header("refresh:2;url=index.php");
        $row=mysqli_fetch_array($result);
        $_SESSION['idu']=$row['id'];
        $_SESSION['name']=$row['ime'];
        $_SESSION['surname']=$row['priimek'];
        $_SESSION['mail']=$row['email'];
        $_SESSION['tel']=$row['geslo'];
        $_SESSION['kraj_id']=$row['kraj_id'];
        //header("Location:index.html");
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
        '>Napačen email ali geslo!</p>";
        header("refresh:2;url=login.html");


        //header("Location:index.html");
    }
// }