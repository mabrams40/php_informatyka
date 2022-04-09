<?php
    require_once "connect.php";

    $nazwa = $_POST['nazwa'];

    $sql = "INSERT INTO klasa VALUES
    (NULL, '$nazwa');";

    $result = $conn->query($sql);

    header("Location: ../add.php");
?>