<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Einloggen</title>
    <link href="login.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Geo" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png?v=4" type="image/x-icon">
    <link rel="icon" href="favicon.png?v=4" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>LOGIN</h1>
      </div>

      <form action="login.php" method="post">
        <div id="data">
          <input type="text" name="user" placeholder="Benutzername"><br>
        </div>
        <div id="data">
          <input type="password" name="pass" placeholder="Passwort"><br>
        </div>
        <input type="submit" name="submit" value="EINLOGGEN">
      </form>

      <div id="footer">
        <p>Noch kein Account?<br><a href="register.php">REGISTRIEREN</a></p>
      </div>
    </div>

    <?php
    /*
      //Form holen
      $user = $_POST['user'];
      $pass = $_POST['pass'];

      //Daten zur Kontrolle ausgeben
      echo "<p>User: " . $user . "</p>";
      echo "<p>Pass: " . $pass . "</p><br>";

      //DB-Verbindung herstellen
      $db = mysqli_connect("localhost", "root", "", "user");
      if (!$db) {
        echo mysqli_connect_errno() . "<br>";
        echo mysqli_connect_error();
      }

      //Query senden und Ergebnis holen
      $query = "SELECT * FROM auth WHERE user='$user' AND pass='$pass'";
      $result = mysqli_query($db, $query);

      //Ergebnisse überprüfen
      $rows = mysqli_num_rows($result);
        if ($rows == 1){
          echo "<p>Login erfolgreich.</p>";
        }
        else echo "<p>Nope.</p>";
    */
    ?>
  </body>
</html>
