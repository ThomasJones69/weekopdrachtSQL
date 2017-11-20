<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" href="layout.css"> 
        <title></title>
    </head>
    <body>
        <?php
        include 'connect.php';
        $conn = connectionDB();
        error_reporting(0);
        ?>

        <h2>Login SQL Weekopdracht inlog</h2>

        <form method="POST">

            <div class="container">
                <label><b>Gebruiker</b></label>
                <input type="text" placeholder="Uw gebruikersnaam" name="user" required>
                <br>
                <label><b>Wachtwoord</b></label>
                <input type="password" placeholder="Voer Wachtwoord in" name="pass" required>
                <br>
                <button type="submit" >Inloggen</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="aktieknop">Account aanmaken</button>
            </div>
        </form>
        <?php
        inloggen($conn);
        ?>
    </body>
</html>