<?php
    session_start();

    if ( $_SESSION['userid']) {
        $id = $_GET["stadionbesuch"];

        require("conn.php");

        $stadionname = $_POST["stadionname"];
        $begegnung = $_POST["begegnung"];
        $ergebnis = $_POST["ergebnis"];
        $datum = $_POST["datum"];

        $befehl = "UPDATE b_stadionbesuch SET stadionname='$stadionname', begegnung='$begegnung', ergebnis='$ergebnis', datum='$datum'WHERE id = $id";
        $result = $conn->prepare($befehl);
        $result = $result->execute();

        if ($result) {
            echo "Bearbeitung gespeichert.";
            echo "</br> Hier einen neuen <a href = '../php/stadionbesuch_eintragen.php'> Stadionbesuch eintragen </a>.";
            echo "</br> Zu <a href = '../php/stadionbesuch_anzeigen.php'> hier </a> deinen Stadionbesuchen.";
        }
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
        <link   rel="stylesheet" 
                href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" >
    </head>
    <body>
    </body>
</html>