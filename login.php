<?php
require_once 'baza.php';
require_once 'cookie.php';

    $e=$_POST['email'];
    $p=$_POST['password'];
    $query = "SELECT * FROM uporabniki WHERE email='$e' AND geslo='$p';";
    $result= mysqli_query($link, $query);
    
    if(mysqli_num_rows($result)==1){
        // window popup
        echo "<script type='text/javascript'>alert('Login successful!');
        window.location.href='index.php';
        </script>";
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
        echo "<script type='text/javascript'>alert('Login failed!');
        window.location.href='login.html';</script>";
        //header("Location:index.html");
    }
// }