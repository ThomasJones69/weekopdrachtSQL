<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" href="layout.css">         
        
    </head>
    <body>
        <h2>Welcome to the Registration Page</h2><br>
        <h2>Please enter your credentials.</h2><br>
        <br>
        <br>
        <form method="POST">
            <div class="container">
                <label><b>Name</b><br></label>
                    <input type="text" placeholder="Enter new Account Name" name="addUser" required>
                    <br>
                    <label><b>E-mail address</b><br></label>
                    <input type="text" placeholder="Enter your E-mail" name="addEmail" required>
                    <br>
                    <label><b>Password</b><br></label>
                    <input type="password" placeholder="Please enter Password" name="addPass" required>
                    <br>
                    <input type="password" placeholder="Please repeat your Password" name="addPasscheck" required><br>
                    <button type="submit" >Submit</button>
                </div>
        </form>
        
    </body>
</html>
<?php

    $hostname = 'localhost';
    $databasenaam = 'weekopdracht_sql';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam);
//    return $conn;
    include 'connect.php';
    addUser($conn);
    
    function addUser($conn){
    $newNaam = $_REQUEST['addUser'];
    $newEmail = $_REQUEST['addEmail'];
    $newPass = $_REQUEST['addPass'];
    $newPasscheck = $_REQUEST['addPasscheck'];
    echo "$newNaam";
    if ($newPass != $newPasscheck){
        echo "Your passwords do not match. Please (re)check";
    }else{
        $sql = "INSERT INTO `user-accounts`(`username`, `emailadres`, `password`) VALUES ('$newNaam','$newEmail','$newPass')";
        $conn->query($sql);
        header("Location: index.php");        
    }
    
}
?>