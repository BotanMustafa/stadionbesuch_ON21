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
    </head>
    <body style="margin: 50px;"> 

            <div style="display: flex; justify-content: space-between; margin-bottom: 5%;">
                <h1>Deine Stadionbesuche</h1>
                <button><a href='../logout.php'>Logout</a></button>
                <button><a href='../php/stadionbesuch_eintragen.php'>Neuer Stadionbesuch</a></button>
            </div>  
    
        <table class="table">
            <thead>
                <tr>
                    <th>Stadionbesuch</th>
                    <th>Stadionname</th>
                    <th>Begegnung</th>
                    <th>Ergebnis</th>
                    <th>Datum</th>
                 </tr>
            </thead>

            <tbody>

                <?php

                    $db_host     = "db";
                    $db_user     = "test";
                    $db_password = "test";
                    $db_name     = "datenbank";
                
                    $conn = new MySQLi($db_host, $db_user, $db_password, $db_name);

                    if ($conn->connect_error){
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "SELECT * FROM b_stadionbesuch";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->connect_error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                                <td>". $row["id"] . "</td>
                                <td>". $row["stadionname"] . "</td>
                                <td>". $row["begegnung"] . "</td>
                                <td>". $row["ergebnis"] . "</td>
                                <td>". $row["datum"] . "</td>
                                <td>
                                    <a href='/php/stadionbesuch_bearbeiten.php?stadionbesuch=" . $row["id"] . "'> Bearbeiten </a>
                                    <a class ='löschen-button' href='/php/stadionbesuch_löschen.php?stadionbesuch=" . $row["id"] . "'> Löschen </a>
                                </td>
                              </tr>";
                        }
                    
                    ?>
            </tbody>
        </table>
    </body>
</html>