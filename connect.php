<?php

function connectionDB() {
    $hostname = 'localhost';
    $databasenaam = 'weekopdracht_sql';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    return $conn;
}

function inloggen($conn) {
        $naam = $_REQUEST['user'];
        $wachtwoord = $_REQUEST['pass'];

        $sql = "SELECT * FROM `user-accounts` WHERE `username` = '$naam' AND `password` = '$wachtwoord'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            echo "<b>" . "Geen account met die gegevens!" . "</b>";
            echo "<br>";
          } else {
            echo "Welkom "."$naam"."."."Je bent succesvol ingelogt";
            sleep(5);
            header("Location: te-lezen-file.php");
        }
}

?>
