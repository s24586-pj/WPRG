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
    <h1>Strona główna</h1>

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
        die("Błąd połączenia: " . $conn->connect_error);
    }

    // Pobranie pięciu samochodów z najniższą ceną
    $sql = "SELECT * FROM samochody ORDER BY cena ASC LIMIT 5";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table>";

        echo "<tr><th>ID</th><th>Marka</th><th>Model</th><th>Cena</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='szczegoly_samochodu.php?id=" . $row["id"] . "'>" . $row["id"] . "</a></td>";
            echo "<td>" . $row["marka"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["cena"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Brak samochodów do wyświetlenia.";
    }

    $conn->close();
    ?>
</body>
</html>