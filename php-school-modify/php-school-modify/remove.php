<?php require_once "script/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Usuwanie z bazy</title>
</head>
<body>
    <?php include("nav.php"); ?>
    <h2>Usuwanie z bazy</h2>

    <h3>klasa</h3>
    <form action="script/usunKlase.php" method="post">
        <label>id</label><br/>
        <input type="number" name="id"><br/>

        <br/><input type="submit" value="usuń">
    </form></br>

    <h3>uczen</h3>
    <form action="script/usunUcznia.php" method="post">
        <label>id</label><br/>
        <input type="number" name="id"><br/>

        <br/><input type="submit" value="usuń">
    </form></br>

    <h3>wychowawca</h3>
    <form action="script/usunWychowawce.php" method="post">
        <label>id</label><br/>
        <input type="number" name="imie"><br/>

        <br/><input type="submit" value="usuń">
    </form></br>
    
</body>
</html>