<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    <?php #select

        $sql = 'SELECT id, nazwisko, imie, srednia_ocen FROM uczen;';
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo '<table border="1" style="background-color: pink;">';
            echo "<tr>";
            echo "<th>L.p.</th>";
            echo "<th>Imię</th>";
            echo "<th>Nazwisko</th>";
            echo "<th>Średnia ocen</th>";

            while($row = $result->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['nazwisko'].'</td>';
                echo '<td>'.$row['imie'].'</td>';
                echo '<td>'.$row['srednia_ocen'].'</td>';
                echo '</tr>';
            }
        }
        else{
            echo "Pusta tabela";
        }
    ?>

    <?php #srednia klasy

        $sql = 'SELECT AVG(srednia_ocen) as srednia FROM uczen;';

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<p>Średnia klasy: '.$row['srednia'].'</p>';
            }
        }
        else{
            echo "Brak średniej klasy";
        }
    ?>

    
</body>
</html>