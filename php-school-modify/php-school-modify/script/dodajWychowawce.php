<?php
    require_once "connect.php";

    $imie = $_POST['nazwisko'];
    $nazwisko = $_POST['imie'];
    $id_klasy = $_POST['id_klasy'];

    $sql = "INSERT INTO wychowawca VALUES
    (NULL, '$imie', '$nazwisko', '$id_klasy');";

    $result = $conn->query($sql);

    header("Location: ../remove.php");
?>