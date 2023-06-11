<?php
require_once 'baza.php';
require_once 'cookie.php';
$id = $_GET['id'];
$sql = "SELECT * FROM treningi WHERE id=$id;";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Treningi</title>
    <link rel="stylesheet" href="style/default.css">
    <link rel="stylesheet" href="style/treningi_edit.css">
    <style>
        body {
            background-color: #002233;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 20px;
            margin-left: 20px;
        }
        .inp{
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #002233;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        .submit{
            margin-right: 20px;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #002233;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .submit:hover{
            background-color: #003366;
        }
        button{
            margin-right: 20px;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #002233;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        button:hover{
            background-color: #003366;
        }
        button a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Uredi trening</h1>
    <form action="trening_update.php" method="post">
        <input class="inp" type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="ime">Ime</label>
        <input class="inp" type="text" name="ime" id="ime" value="<?php echo $row['ime']; ?>">
        <br>
        <label for="opis">Opis</label>
        <input class="inp" type="text" name="opis" id="opis" value="<?php echo $row['opis']; ?>">
        <br>
        <label for="datum">Datum</label>
        <input class="inp" type="date" name="datum" id="datum" value="<?php echo $row['datum']; ?>">
        <br>
        <label for="kraj">Kraj</label>
        <select class="inp" name="kraj" id="kraj">
            <?php
            $sql2 = 'SELECT * FROM kraji;';
            $result2 = mysqli_query($link, $sql2);
            while ($row2 = mysqli_fetch_array($result2)) {
                if ($row2['id'] == $row['kraj_id']) {
                    echo '<option value="' . $row2['id'] . '" selected>' . $row2['kraj'] . '</option>';
                } else {
                    echo '<option value="' . $row2['id'] . '">' . $row2['kraj'] . '</option>';
                }
            }
            ?>
        </select>
        <br>
        <label for="lokacija">Lokacija</label>
        <select class="inp" name="lokacija" id="lokacija">
            <?php
            $sql3 = 'SELECT * FROM lokacije;';
            $result3 = mysqli_query($link, $sql3);
            while ($row3 = mysqli_fetch_array($result3)) {
                if ($row3['id'] == $row['lokacija_id']) {
                    echo '<option value="' . $row3['id'] . '" selected>' . $row3['lokacija'] . '</option>';
                } else {
                    echo '<option value="' . $row3['id'] . '">' . $row3['lokacija'] . '</option>';
                }
            }
            ?>
        </select>
        <br>
        <input class="submit" type="submit" value="Posodobi">
    </form>
    <a href="treningi_overlook.php"><button>Nazaj</button></a>
</body>
</html>
