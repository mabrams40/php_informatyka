<?php
    require_once "connect.php";

    $nazwisko = $_POST['nazwisko'];
    $imie = $_POST['imie'];
    $srednia_ocen = $_POST['srednia_ocen'];
    $id_klasy = $_POST['id_klasy'];

    $sql = "INSERT INTO uczen VALUES
    (NULL, '$nazwisko', '$imie', '$srednia_ocen', '$id_klasy');";

    $result = $conn->query($sql);

    header("Location: ../add.php");
?>