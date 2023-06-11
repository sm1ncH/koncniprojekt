<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/trening_ins.css">
    <link rel="stylesheet" href="style/default.css">
    <title>Document</title>
  </head>
  <body>
    <form action="trening_upload.php" method="post" enctype="multipart/form-data">
      <input type="text" name="ime" id="ime" placeholder="IME" />
      <input type="text" name="opis" placeholder="OPIS" />
      <input type="date" name="datum" id="datum" placeholder="DATUM" />
      <input type="number" name="tezavnost" placeholder="TEZAVNOST">
      <select name="kraj" required>
        <option value="nikraja">Izberi kraj</option>
          <?php
          require_once 'baza.php';
          $query = "SELECT * FROM kraji;";
          $result= mysqli_query($link, $query);
          while($row=mysqli_fetch_array($result)){
            echo "<option value='".$row['id']."'>".$row['kraj']."</option>";
          }
          ?>
          
      </select>
      <select name="lokacija" required>
        <option value="nilokacije">Izberi kraj</option>
          <?php
          require_once 'baza.php';
          $query = "SELECT * FROM lokacije;";
          $result= mysqli_query($link, $query);
          while($row=mysqli_fetch_array($result)){
            echo "<option value='".$row['id']."'>".$row['lokacija']."</option>";
          }
          ?>
          
      </select>
      <!-- img upload -->
      <input type="file" name="fileToUpload" id="fileToUpload" />
      <input type="submit" value="Upload" />
    </form>
  </body>
</html>
