<?php
    require_once "connect.php";

    $id = $_POST['id'];

    $sql = "DELETE FROM wychowawca
    WHERE id='$id';";

    $result = $conn->query($sql);

    header("Location: ../add.php");
?>