<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav id="navbar">
            <ul>
                <li><a href="zadanie1/index.html">Zadanie 1</a></li>
                <li><a href="index.php">Strona główna (zadanie 2)</a></li>
                <li><a href="zadanie3/index.php">Zadanie 3</a></li>
                <li><a href="zadanie4/index.php">Zadanie 4</a></li>
                <li><a href="zadanie5/index.php">Zadanie 5</a></li>
            </ul>
        </nav>
    </header>

    <menu id="content">
        <h1>Strona startowa</h1>
        <h2></h2>
    </menu>
    <br><br>

    <footer>
        <p>Igor Lewandowski 2c</p>
    </footer>

</body>
</html>

<?php
    $user = "root";
    $host = "localhost";
    $pass = "";
    $db = "praktyki";

    $con = mysqli_connect($host, $user, $pass, $db);

    if(!$con) {
        die("nie działa połączenie" . mysqli_connect_error());
    }

    $sql = "SELECT * FROM uczniowie_2c";

    $res = mysqli_query($con, $sql);
        
    if(mysqli_num_rows($res) >0) {
        while($row = mysqli_fetch_assoc($res)) {
            echo "<div id='ok'>Imię to: " . $row['Imie'] . ", nazwisko to: " . $row['Nazwisko'] . ", mieszka w: " . $row['Miasto'] . ", rozmiar buta to: " . $row['Rozmiar_buta'] . ", oceny: " . $row['Oceny'] . ";</div><br><br>";
        }
    }
    else{
        echo "coś nie działa w zapytaniu";
    }
    mysqli_close($con);

?>
