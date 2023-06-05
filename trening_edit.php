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
</head>
<body>
    <h1>Uredi trening</h1>
    <form action="trening_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="ime">Ime</label>
        <input type="text" name="ime" id="ime" value="<?php echo $row['ime']; ?>">
        <br>
        <label for="opis">Opis</label>
        <input type="text" name="opis" id="opis" value="<?php echo $row['opis']; ?>">
        <br>
        <label for="datum">Datum</label>
        <input type="date" name="datum" id="datum" value="<?php echo $row['datum']; ?>">
        <br>
        <label for="kraj_id">Kraj</label>
        <!-- <select name="kraj_id" required>
        <option value="nikraja">Izberi kraj</option>
          <?php
          // require_once 'baza.php';
          // $query = "SELECT * FROM kraji;";
          // $result= mysqli_query($link, $query);
          // while($row=mysqli_fetch_array($result)){
          //   echo "<option value='".$row['id']."'>".$row['kraj']."</option>";
          // }
          ?>
          
      </select> -->
        <input type="text" name="kraj_id" id="kraj_id" value="<?php echo $row['kraj_id']; ?>">
        <br>
        <label for="lokacija_id">Lokacija</label>
        <input type="text" name="lokacija_id" id="lokacija_id" value="<?php echo $row['lokacija_id']; ?>">
        <br>
        <label for="uporabnik_id">Uporabnik</label>
        <input type="text" name="uporabnik_id" id="uporabnik_id" value="<?php echo $row['uporabnik_id']; ?>">
        <br>
        <input type="submit" value="Posodobi">
    </form>
</body>
</html>
