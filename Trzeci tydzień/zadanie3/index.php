<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Zadanie 3</title>
</head>
<body>

    <header>
        <nav id="navbar">
            <ul>
                <li><a href="../zadanie1/index.html">Zadanie 1</a></li>
                <li><a href="../index.php">Strona główna (zadanie 2)</a></li>
                <li><a href="index.php">Zadanie 3</a></li>
                <li><a href="../zadanie4/index.php">Zadanie 4</a></li>
                <li><a href="../zadanie5/index.php">Zadanie 5</a></li>
            </ul>
        </nav>
    </header>

    <menu id="content">
        <h1>Formularz do dodawania uczniów</h1>
    </menu>
    <br><br><br><br>

    <div id="formularz">
    <form method="post" action="">
        <label>Imię: <input type="text" name="imie"></label><br><br>
        <label>Nazwisko: <input type="text" name="nazwisko"></label><br><br>
        <label>Miasto: <input type="text" name="miasto"></label><br><br>
        <button type="submit">Dodaj</button>
    </form>
    </div>

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

if (!$con) {
    die("Nie działa połączenie: " . mysqli_connect_error() );
}

if (!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['miasto'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $miasto = $_POST['miasto'];
    
    $sql = "INSERT INTO uczniowie_2c (Imie, Nazwisko, Miasto) VALUES ('$imie', '$nazwisko', '$miasto')";
    
    if (mysqli_query($con, $sql)) {
        echo "<div id='dobrze'> Uczeń $imie $nazwisko został dodany :)</div>";
    } else {
        echo "<div id='zle'>Wystąpił błąd: " . mysqli_error($con) . "</div>";
    }
}

mysqli_close($con);

?>
