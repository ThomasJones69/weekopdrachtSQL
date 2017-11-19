<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" href="layout.css"> 
        <title></title>
    </head>
    <body>
        <?php
        include 'connect.php';
        session_start();
        ?>

        <h2>Login SQL Weekpdracht inlog</h2>

        <form method="POST">

            <div class="container">
                <label><b>Gebruiker</b></label>
                <input type="text" placeholder="Uw gebruikersnaam" name="user" required>
                <br>
                <label><b>Wachtwoord</b></label>
                <input type="password" placeholder="Voer Wachtwoord in" name="pass" required>
                <br>
                <button type="submit" width="75px" onclick="inloggen()">Inloggen</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="annuleerknop">Annuleren</button>
            </div>
        </form>
<?php
//    $naam = $_REQUEST['user'];
//    $wachtwoord = $_REQUEST['pass'];
//    echo "$naam";
//    echo "$wachtwoord";
//    
//    $encrypt = crypt($wachtwoord, $salt);
//    
//    $sql = "SELECT * FROM `user-accounts` WHERE `username` = '$naam'";
////        $result = mysqli_query($connectie, $sql);
////        $result = mysqli_query($sql);
//        $result = $conn->query($sql);
//        if ($result->num_rows == 0) {
//            echo "Geen account met die gegevens!";
//        }
    
//    if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
//    echo "CRYPT_BLOWFISH is enabled!";
//}else {
//echo "CRYPT_BLOWFISH is not available";
//}


?>
    </body>
</html>