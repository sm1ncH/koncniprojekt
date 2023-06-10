<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/index.css">
    <title>Index</title>
    <style>
      #footer {
  background-color: #002233;
  color: white;
  text-align: center;
  padding: 10px;
  font-size: 15px;
  font-weight: bold;
}
    </style>
  </head>
  <body>
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
    <main>
    <div id="naslovnica">
      
      <?php
      require_once 'baza.php';
      require_once 'cookie.php';

      if (isset($_SESSION['idu'])) {
        echo "<h1 id='naslov'>Dobrodošel " . $_SESSION['name'] . " " . $_SESSION['surname'] . " k projetku Jureta Petronijeviča!</h1>";
      } else {
        echo "<h1 id='naslov'>Projekt Jure Petronijevič!</h1>";
      }
      ?>
    </div>
    <div id="vsebina">
      <h1>Treningi</h1>
      <!-- naredi p in opiši v slovenščini kaj je trening -->
      <p>Trening je načrtovana in sistematična vadba, ki je namenjena izboljšanju telesne pripravljenosti. 
        Trening je lahko tudi priprava na tekmovanje.
      </p>
    </div>
    </main>

    <footer id="footer">
      <p>© Jure Petronijevič</p>
    </footer>
  </body>
</html>
