<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/default.css">
    <title>Document</title>
    <style>
      input {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
      }
      #subm {
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
      }
      #subm:hover {
        background-color: #ddd;
      }
      form {
        justify-content: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10vh;
      }
      select {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 5px;
        background-color: #f1f1f1;
      }
      #submit:hover {
        background-color: #ddd;
      }
    </style>
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
      <input type="submit" value="Register" id="submit"/>
    </form>
  </body>
</html>
