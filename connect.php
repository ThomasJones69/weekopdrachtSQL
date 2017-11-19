<?php

function connectionDB() {

    $hostname = 'localhost';            
    $databasenaam = 'user-accounts';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam); 
    if ($conn->connect_error) die($conn->connect_error);
    return $conn;  
}

function inloggen(){
    $naam = $_REQUEST['user'];
    $wachtwoord = $_REQUEST['pass'];
    echo "$naam";
    echo "$wachtwoord";
    
    $encrypt = crypt($wachtwoord, $salt);
    
    $sql = "SELECT * FROM `user-accounts` WHERE `username` = '$naam' AND `password` = '$password'";
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
