<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styll.css">
    <title>Zadanie 5</title>
</head>
<body>

    <header>
        <nav id="navbar">
            <ul>
                <li><a href="../zadanie1/index.html">Zadanie 1</a></li>
                <li><a href="../index.php">Strona główna (zadanie 2)</a></li>
                <li><a href="../zadanie3/index.php">Zadanie 3</a></li>
                <li><a href="../zadanie4/index.php">Zadanie 4</a></li>
                <li><a href="index.php">Zadanie 5</a></li>
            </ul>
        </nav>
    </header>

    <menu id="content">
        <h1>Formularz do wyrzucania uczniów</h1>
    </menu>
    <br><br><br><br>

    <div id="formularz">
    <form method="POST">
        <label>Imię: <input type="text" name="imie" required></label><br><br>
        <label>Nazwisko: <input type="text" name="nazwisko" required></label><br><br>
        <button type="submit">Usuń</button><br><br>
    </form>
    </div>

    <footer>
        <p>Igor Lewandowski 2c</p>
    </footer>

</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktyki";


$con = new mysqli($servername, $username, $password, $dbname);


if ($con->connect_error) {
    die("Połączenie nieudane: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $imie = $_POST['imie'] ?? '';
    $nazwisko = $_POST['nazwisko'] ?? '';

    if (!empty($imie) && !empty($nazwisko)) {
        $sql = "DELETE FROM uczniowie_2c WHERE imie = ? AND nazwisko = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $imie, $nazwisko);

        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo "<div id='dobrze'> Uczeń $imie $nazwisko został usunięty :)</div>";
        } else {
            echo "<div id='zle'> Uczeń $imie $nazwisko nie istnieje ! </div>";
        }
        $stmt->close();
    } else {
        echo "Wpisz imię i nazwisko !";
    }
}


$con->close();  

?>
