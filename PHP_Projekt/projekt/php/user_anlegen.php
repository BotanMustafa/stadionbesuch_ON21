<?php
     session_start();
     
    require("conn.php");

    $new_username = "user";
    $new_passwort = "passwort";
    $new_email    = "test@test.de";

    $new_passwort = password_hash($new_passwort, PASSWORD_DEFAULT);

    
    $abfrage ="INSERT INTO b_user(username, passwort, email)
                VALUES ('".$new_username."','".$new_passwort."','".$new_email."')";
   
   if($conn->query($abfrage) === TRUE){
        echo "Benutzer angelegt";
   }
   else{
        echo "Fail";
   }
?>