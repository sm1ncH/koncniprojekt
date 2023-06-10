<?php 
require_once 'baza.php';
require_once 'cookie.php';
$admin = false;
if ($_SESSION['idu'] == 3) {
    echo "<p id='admin' title='You are admin'>Admin view<p>";
    $admin = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/treningi_overlook.css">
</head>
<body>
    <!-- Tu bo še nav -->
    <nav id="navigacija">
      <ul>
        <li><img src="slike/logo.png" alt=""></li>
        <li><a href="index.php">Home</a></li>
        <li>
        <?php
        require_once 'baza.php';
        require_once 'cookie.php';
        if (isset($_SESSION['idu'])) {
          echo"<a href='trening_ins.php'>Trening</a>" ;
        }
        ?>
        </li>
        <li>
        <?php
        require_once 'baza.php';
        require_once 'cookie.php';
        if (isset($_SESSION['idu'])) {
          echo"<a href='treningi_overlook.php'>Treningi Overlook</a>" ;
        }
        ?>
        </li>
        <li><?php 
        require_once 'baza.php';
        require_once 'cookie.php';

        if (isset($_SESSION['idu'])) {
        echo "<a href='logout.php'>Logout</a>";
      } else {
        echo "<a href='login.html'>Login</a>";
      } ?></li>
      </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Treningi</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Ime</th>
                            <th>Opis</th>
                            <th>Datum</th>
                            <th>Kraj</th>
                            <th>Lokacija</th>
                            <th>Uporabnik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'baza.php';
                        require_once 'cookie.php';
                        $sql = 'SELECT * FROM treningi;';
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['ime'] . '</td>';
                            echo '<td>' . $row['opis'] . '</td>';
                            echo '<td>' . $row['datum'] . '</td>';
                            $sql2 = 'SELECT kraj FROM kraji WHERE id = ' . $row['kraj_id'] . ';';
                            $result2 = mysqli_query($link, $sql2);
                            $row2 = mysqli_fetch_array($result2);
                            echo '<td>' . $row2['kraj'] . '</td>';
                            $sql3 = 'SELECT lokacija FROM lokacije WHERE id = ' . $row['lokacija_id'] . ';';
                            $result3 = mysqli_query($link, $sql3);
                            $row3 = mysqli_fetch_array($result3);
                            echo '<td>' . $row3['lokacija'] . '</td>';
                            $sql4 = 'SELECT ime FROM uporabniki WHERE id = ' . $row['uporabnik_id'] . ';';
                            $result4 = mysqli_query($link, $sql4);
                            $row4 = mysqli_fetch_array($result4);
                            
                            
                            if($row['slika_id'] != null){
                                $sql5 = 'SELECT url FROM slike WHERE id = ' . $row['slika_id'] . ';';
                            $result5 = mysqli_query($link, $sql5);
                            $row5 = mysqli_fetch_array($result5);
                                echo '<td><img src="slike/' . $row5['url'] . '" alt="" width="100px"></td>';
                            }
                            else{
                                echo '<td><img src="slike/default.jpg" alt="" width="100px"></td>';
                            }

                            echo '<td>' . $row4['ime'] . '</td>';
                            if ($admin == true){
                                echo '<td><a href="trening_edit.php?id=' . $row['id'] . '">Uredi</a></td>';
                            }

                            echo '</tr>';
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>