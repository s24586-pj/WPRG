<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: lightblue;
        }

        body {
            text-align: center;
        }

        p {
            font-weight: 400;
            font-size: 15px;
        }
        h1{
            font-size: 60px;
        }
        table{
            border: 2px solid black;
            margin-left: auto;
            margin-right: auto;
        }
      
    </style>
</head>
<body>

<?php
// Połączenie z bazą danych (zmieniłem port dlatego 5 parametr)
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'samochody';
$port = 3369;

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $database, $port);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die('Błąd połączenia: ' . $conn->connect_error);
}

// Utworzenie tabeli "samochody" z NOT NULLAMI,
$sql = "CREATE TABLE samochody (
    id INT(6)  PRIMARY KEY,
    marka VARCHAR(30) NOT NULL,
    model VARCHAR(30) NOT NULL,
    cena FLOAT(8,2) NOT NULL,
    rok INT(4) NOT NULL,
    opis VARCHAR(255)
)";
//sprawdzenie czy udało sie utworzyc
if ($conn->query($sql) === TRUE) {
    echo "Tabela 'samochody' została utworzona";
} else {
    echo "Błąd tworzenia tabeli: " . $conn->error;
}
//zamkniecie polaczenia
$conn->close();
?>
</body>
</html>