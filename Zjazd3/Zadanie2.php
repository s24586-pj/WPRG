<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: lightblue;
        }

        body {
            text-align: center;
        }

        button {
            padding: 1em;
            margin: 1em;
        }

        input {
            margin: 1em;
        }
    </style>
</head>

<body>
    <h1>Licznik</h1>
<?php
// nasz plik liczacy ilosc wejsc
$plik_licznik = "licznik.txt";

// Sprawdzenie, czy plik istnieje
if (!file_exists($plik_licznik)) {
    // Jeśli plik nie istnieje, to tworzymy go i ustawiamy licznik na 1
    file_put_contents($plik_licznik, "1");
    $licznik = 1;
} 
else {
    // sprawdzenie licznika/odczytanie go
    $licznik = intval(file_get_contents($plik_licznik));
    // zwiekszenie licznika o jeden
    $licznik++;
    // Zapisanie zaktualizowanej wartości licznika do pliku,strval zmienia w stringa
    file_put_contents($plik_licznik, strval($licznik));
}

// Wyświetlenie licznika
echo "Jestes u nas juz" . $licznik . " razy";
?>


</body>

</html>