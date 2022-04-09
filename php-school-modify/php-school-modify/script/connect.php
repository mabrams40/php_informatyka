<?php #łączenie
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'szkola';

        $conn = mysqli_connect($host, $user, $pass, $db);

        if($conn){
            echo 'Połączono z bazą!';
        }
        else{
            echo 'Błąd łączenia z bazą.';
        }
    ?>