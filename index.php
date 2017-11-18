<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" href="layout.css"> 
        <title></title>
    </head>
    <body>
        <?php
        include 'connect.php';
        ?>

        <h2>Login SQL Weekpdracht inlog</h2>

        <form action="/action_page.php">

            <div class="container">
                <label><b>Gebruiker</b></label>
                <input type="text" placeholder="Uw gebruikersnaam" name="user" required>
                <br>
                <label><b>Wachtwoord</b></label>
                <input type="password" placeholder="Voer Wachtwoord in" name="pass" required>
                <br>
                <button type="submit" width="100px">Inloggen</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
            </div>
        </form>

    </body>
</html>
