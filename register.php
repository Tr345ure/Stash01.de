<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Einloggen</title>
    <link href="register.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Geo" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png?v=4" type="image/x-icon">
    <link rel="icon" href="favicon.png?v=4" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>REGISTRIEREN</h1>
      </div>

      <form action="register.php" method="post">
        <div id="data">
          <input type="text" name="user" placeholder="Benutzername" minlength="3" maxlength="32"><br>
        </div>
        <div id="data">
          <input type="text" name="email" placeholder="E-Mail-Adresse"><br>
        </div>
        <div id="data">
          <input type="password" name="pass" placeholder="Passwort"><br>
        </div>
        <div id="data">
          <input type="password" name="passrepeat" placeholder="Passwort wiederholen"><br>
        </div>
        <input type="submit" name="submit" value="REGISTRIEREN">
      </form>

      <div id="footer">
        <p>Du hast schon einen Account?<br><a href="login.php">EINLOGGEN</a></p>
      </div>
    </div>
    <?php /*
      //Form holen
      $user = $_POST['user'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $passrepeat = $_POST['passrepeat'];

      //Username validieren
      $forbiddennames = array("Administrator","Moderator","Supporter","Owner");
      for($i=0;$i<count($forbiddennames);$i++){
        if($user == $forbiddennames[$i]){
          echo "<p>Dieser Nutzername ist nicht erlaubt.</p>";
        }
      }

      //E-Mail-Adresse validieren
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<p>Diese E-Mail-Adresse ist falsch.</p>";
      }

      //Passwort validieren
      if (strlen($pass)<8){
        echo "<p>Das Passwort ist zu kurz.</p>";
      }
      elseif (strlen($pass)>2048) {
        echo "<p>Das Passwort ist länger als 2048 Zeichen.</p>";
      }

      //Passwortwiederholung überprüfen
      if ($pass != $passrepeat){
        echo "<p>Passwörter stimmen nicht überein.</p>";
      }

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
          echo "";
        }
        else echo "";
      */
    ?>
  </body>
</html>
