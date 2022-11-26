<?php
    session_start();
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

        <form action="Stadionbesuch_verarbeiten.php" method="post">
            <label for="stadionname"> Stadionname </label>
            <input type="text" id="stadionname" name="stadionname">
            
            <label for="begegnung"> Begegnung </label>
            <input type="text" id="begegnung" name="begegnung">

            <label for="ergebnis"> Ergebnis </label>
            <input type="text" id="ergebnis" name="ergebnis">

            <label for="datum"> Datum </label>
            <input type="text" id="datum" name="datum">

            

            <br>

            <button> Speichern </button>
        </form>

  </body>
</html>