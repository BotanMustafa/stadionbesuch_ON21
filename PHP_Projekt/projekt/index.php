<?php 
    session_start();

    if(!isset($_SESSION['userid'])) {
        // Nutzer ist nicht eingeloggt
        echo "nicht eingeloggt.";
    }
    else{
        echo "sauberle, eingeloggt";

        $userid = $_SESSION['userid'];
        echo " </br>Hallo User: ". $userid;
        echo "</br> Jetzt <a href='../php/stadionbesuch_eintragen.php'>  Stadionbesuch anlegen </a>. </br>";
    }
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link   rel="stylesheet" 
                href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" >
    </head>
    <body>
    </body>
</html>