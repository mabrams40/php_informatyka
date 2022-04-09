<?php require_once "script/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dodawanie do bazy</title>
</head>
<body>
    <?php include("nav.php"); ?>
    <h2>Dodawanie do bazy</h2>

    <h3>klasa</h3>
    <form action="script/dodajKlase.php" method="post">
        <label>nazwa</label><br/>
        <input type="text" name="nazwa"><br/>

        <br/><input type="submit" value="dodaj">
    </form></br>

    <h3>uczen</h3>
    <form action="script/dodajUcznia.php" method="post">
        <label>nazwisko</label><br/>
        <input type="text" name="nazwisko"><br/>
        <label>imie</label><br/>
        <input type="text" name="imie"><br/>
        <label>srednia_ocen</label><br/>
        <input type="text" name="srednia_ocen"><br/>
        <label>id_klasy</label><br/>
        <input type="number" name="id_klasy"><br/>

        <br/><input type="submit" value="dodaj">
    </form></br>

    <h3>wychowawca</h3>
    <form action="script/dodajWychowawce.php" method="post">
        <label>imie</label><br/>
        <input type="text" name="imie"><br/>
        <label>nazwisko</label><br/>
        <input type="text" name="nazwisko"><br/>
        <label>id_klasy</label><br/>
        <input type="number" name="id_klasy"><br/>

        <br/><input type="submit" value="dodaj">
    </form></br>
</body>
</html>