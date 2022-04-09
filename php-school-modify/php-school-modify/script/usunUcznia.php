<?php
    require_once "connect.php";

    $id = $_POST['id'];

    $sql = "DELETE FROM uczen
    WHERE id='$id';";

    $result = $conn->query($sql);

    header("Location: ../remove.php");
?>