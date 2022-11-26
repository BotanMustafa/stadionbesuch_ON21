<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link   rel="stylesheet" 
                href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" >
    <title>Login - Stadionerinnerung</title>
     </head>
    <body>
        <form action="php/login.php" method="post">
            <input name="username" id="username" type="text" placeholder="Benutzername"/>
            <input name="passwort" id="passwort" type="passwort" placeholder="********"/>

            <input name="submit" id="submit" type="submit" value="Einloggen" />
        </form>

    </body>
</html>