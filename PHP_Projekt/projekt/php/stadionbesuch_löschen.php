<?php
    session_start();

    if ( $_SESSION['userid']) {
        $id = $_GET["stadionbesuch"];

        require("conn.php");

        $befehl = "DELETE FROM b_stadionbesuch WHERE id=$id";
        $result = $conn->prepare($befehl);
        $result = $result->execute();

        if ($result) {
            echo "Stadionbesuch gelöscht! </br>
            Wieder zu <a href='/php/stadionbesuch_anzeigen.php'> deinen Stadionbesuchen </a> </br>
            oder einen <a href= '/php/stadionbesuch_eintragen.php'> neuen Stadionbesuch eintragen.";
        }
    }
    else {
        echo "Einloggen.";
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