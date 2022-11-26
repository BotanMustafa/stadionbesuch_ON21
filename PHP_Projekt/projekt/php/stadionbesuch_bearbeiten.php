<?php
    session_start();

    if ( $_SESSION['userid']) {
        $id = $_GET["stadionbesuch"];

        require("conn.php");

        $befehl = "SELECT * FROM b_stadionbesuch WHERE id = $id";
        $result = $conn->query($befehl);
        $result = $result->fetch_assoc();
    }
    else {
        header ("location: /login.php");
            exit;
    } 
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stadionerinnerungen</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
  </head>
  <body>
        <h1> Stadionbesuch </h1>

        <form action="stadionbesuch_update.php?stadionbesuch=<?php echo $id; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="stadionname"> Stadionname </label>
            <input type="text" id="stadionname" name="stadionname" value="<?php echo $result["stadionname"];?>">
            
            <label for="begegnung"> Begegnung </label>
            <input type="text" id="begegnung" name="begegnung" value="<?php echo $result["begegnung"];?>">

            <label for="ergebnis"> Ergebnis </label>
            <input type="text" id="ergebnis" name="ergebnis" value="<?php echo $result["ergebnis"];?>">

            <label for="datum"> Datum </label>
            <input type="text" id="datum" name="datum" value="<?php echo $result["datum"];?>">

            

            <br>

            <button> Speichern </button>
        </form>

  </body>
</html>