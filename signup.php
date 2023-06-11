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
      * {
  margin: 0;
  padding: 0;
}
#navigacija {
  background-color: #002233;
  overflow: hidden;
  height: 60px;
}
#navigacija a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  height: 25px;
  padding-top: 20px;
  transition: ease 0.5s all;
  border-radius: 20px;
}
#navigacija a:hover {
  background-color: #ddd;
  color: black;
}
#navigacija ul li {
  display: inline-block;
  list-style: none;
  display: inline;
  align-items: right;
  border-radius: 20px;
}
#navigacija ul li img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 10px;
  float: right;
  padding-top: 5px;
  transition: ease 0.5s all;
}
#navigacija ul li img:hover {
  transform: scale(1.2);
}

    </style>
  </head>
  <body>
  <nav id="navigacija">
      <ul>
        <li><img src="slike/logo.png" alt="" /></li>
        <li><a href="index.php">Home</a></li>
      </ul>
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
