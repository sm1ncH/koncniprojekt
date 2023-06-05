<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <nav>
      <div><img src="" alt=""></div>
      <div>
      <a href="index.php">Home</a>
      </div>
    </nav>
    <form action="register.php" method="post">
      <input type="text" name="name" placeholder="Name" required />
      <input type="text" name="surname" placeholder="Surname" required />
      <input type="email" name="email" placeholder="E-mail" required />
      <input type="password" name="password" placeholder="Password" required />
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
      <input type="submit" value="Register" />
    </form>
  </body>
</html>
