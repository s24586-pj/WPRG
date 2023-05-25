<!DOCTYPE html>
<html>
<head>
    <title>Dodaj Samochód</title>
</head>
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
<body>
    <h1>Dodaj Samochód</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pobierz dane z formularza
        $marka = $_POST["marka"];
        $model = $_POST["model"];
        $cena = $_POST["cena"];
        $rok = $_POST["rok"];
        $opis = $_POST["opis"];

        // Połączenie z bazą danych
        $servername = '127.0.0.1';
        $username = 'root';
        $password = '';
        $database = 'samochody';
        $port = 3369;

// Tworzenie połączenia
        $conn = new mysqli($servername, $username, $password, $database, $port);

        // Wstawienie danych do bazy
        $sql = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', $cena, $rok, '$opis')";

        //info o dodadniu 
        if ($conn->query($sql) === TRUE) {
            echo "Samochód został dodany.";
        } else {
            echo "Błąd dodawania samochodu: " . $conn->error;
        }

        $conn->close();
    }
    ?>
        
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="marka">Marka:</label>
        <input type="text" id="marka" name="marka" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="cena">Cena:</label>
        <input type="number"  id="cena" name="cena" required><br>

        <label for="rok">Rok produkcji:</label>
        <input type="number" id="rok" name="rok" required><br>

        <label for="opis">Opis:</label>
        <textarea id="opis" name="opis"></textarea><br>

        <input type="submit" value="Dodaj">
           
    </form>
    <a href="panel.php">Strona główna</a>

</body>
</html>