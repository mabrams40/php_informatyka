<?php
    require_once "connect.php";

    $id = $_POST['id'];

    $sql = "DELETE FROM klasa
    WHERE id='$id';";

    $result = $conn->query($sql);

    header("Location: ../remove.php");
?>