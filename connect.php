<?php

function connectionDB() {
    $hostname = 'localhost';            
    $databasenaam = 'weekopdracht_sql';
    $username = 'root';
    $password = '';
   
    $conn = new mysqli($hostname, $username, $password, $databasenaam); 
    return $conn;  
}

function inloggen(){
    $naam = $_REQUEST['user'];
    $wachtwoord = $_REQUEST['pass'];
    
//    $encrypt = crypt($wachtwoord, $salt);
    
    $sql = "SELECT * FROM `user-accounts` WHERE `username` = '$naam' AND `password` = '$wachtwoord'";
    echo $sql;
//        $result = mysqli_query($connectie, $sql);
//        $result = mysqli_query($sql);
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            echo "Geen account met die gegevens!";
        }else{
            echo "u bent ingelogt";
        }
}
?>
