<?php 
    session_start();
    

    $stadionname = $_POST["stadionname"];
    $begegnung = $_POST["begegnung"];
    $ergebnis = $_POST["ergebnis"];
    $datum = $_POST["datum"];

    $db_host     = "db";
    $db_user     = "test";
    $db_password = "test";
    $db_name     = "datenbank";

    $conn = new MySQLi($db_host, $db_user, $db_password, $db_name);

    if (mysqli_connect_errno()) {
        die("Verbindungsfehler: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO b_stadionbesuch (stadionname, begegnung, ergebnis, datum)
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssss", $stadionname, $begegnung, $ergebnis, $datum);

    mysqli_stmt_execute($stmt);

    echo "Eingabe gespeichert.";
    echo "</br> Neuen <a href='../php/stadionbesuch_eintragen.php'>  Stadionbesuch anlegen </a>. </br> ";
    echo "</br> Klicke <a href = '../php/stadionbesuch_anzeigen.php'> hier </a> um dir deine Stadionbesuche anzusehen.";

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