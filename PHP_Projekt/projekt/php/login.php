<?php
    session_start();

    require("conn.php");

    $login_user = $_POST["username"];
    $login_passwort = $_POST["passwort"];

    $abfrage ="SELECT * FROM b_user WHERE username = '". $login_user ."' ";
    $result = $conn->query($abfrage);
    $user = $result->fetch_assoc();

    if($user){

        //User wurde gefunden
        if(password_verify($login_passwort, $user['passwort'])){
            echo "Passwort stimmt!";

            $_SESSION['userid'] = $user['id'];

            echo "<br/>Sauberle, du bist eingeloggt!<br/>
            Jetzt zu <a href='../php/stadionbesuch_eintragen.php'> deinen Stadionbesuchen </a>.";
        }
        else{
            echo "Passwort stimmt nicht!";
        }
    }
    else{

        echo "Benutzer nicht gefunden";

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