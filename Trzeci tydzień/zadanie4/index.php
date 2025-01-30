<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
    <link rel="stylesheet" href="styleee.css">
</head>
<body>

    <header>
        <nav id="navbar">
            <ul>
                <li><a href="../zadanie1/index.html">Zadanie 1</a></li>
                <li><a href="../index.php">Strona główna (zadanie 2)</a></li>
                <li><a href="../zadanie3/index.php">Zadanie 3</a></li>
                <li><a href="index.php">Zadanie 4</a></li>
                <li><a href="../zadanie5/index.php">Zadanie 5</a></li>
            </ul>
        </nav>
    </header>

    <menu id="content">
        <h1>Dodawanie ocen uczniom</h1>
    </menu>
    <br><br><br><br>

    <div id="formularz">
    <form method="post" action="">
        <label for="imie">Imię:</label>
        <input type="text" name="imie" id="imie" required>
        <br><br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko" id="nazwisko" required>
        <br><br>
        <label for="ocena">Ocena (1-6):</label>
        <input type="number" name="ocena" id="ocena" min="1" max="6" required>
        <br><br>
        <button type="submit">Dodaj ocenę</button><br><br>
    </form>
    </div>  

    <footer>
        <p>Igor Lewandowski 2c</p>
    </footer>

</body>
</html>

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'praktyki';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['imie'], $_POST['nazwisko'], $_POST['ocena'])) {
    $imie = $conn->real_escape_string($_POST['imie']);
    $nazwisko = $conn->real_escape_string($_POST['nazwisko']);
    $ocena = intval($_POST['ocena']);

    if ($ocena < 1 || $ocena > 6) {
        echo "Ocena musi być liczbą od 1 do 6.";
    } else {
        $query = "SELECT Oceny FROM uczniowie_2c WHERE Imie = '$imie' AND Nazwisko = '$nazwisko'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $noweOceny = empty($row['Oceny']) ? $ocena : $row['Oceny'] . ',' . $ocena;

            $update = "UPDATE uczniowie_2c SET Oceny = '$noweOceny' WHERE Imie = '$imie' AND Nazwisko = '$nazwisko'";
            if ($conn->query($update)) {
                echo "<div id='dobre'> Ocena została dodana :)</div>";
            } else {
                echo "<div id='zle'> Błąd przy dodawaniu oceny: </div>" . $conn->error;
            }
        } else {
            echo "<div id='zle'> Nie znaleziono ucznia o podanych danych ! </div>";
        }
    }
}

$query = "SELECT * FROM uczniowie_2c";
$result = $conn->query($query);


?>
