<?php
//przypisanie wartosci do zmiennych z formularza
if (isset($_POST['numer_karty']) && isset($_POST['imie_nazwisko']) && isset($_POST['ilosc_osob'])) {
    $numer_karty = $_POST['numer_karty'];
    $imie_nazwisko = $_POST['imie_nazwisko'];
    $ilosc_osob = $_POST['ilosc_osob'];
    //wypisanie
    echo "<p>Numer karty: $numer_karty</p>";
    echo "<p>Imię i nazwisko zamawiającego: $imie_nazwisko</p>";
    echo "<p>Ilość osób: $ilosc_osob</p>";

    // Zapisanie danych do ciastka na 1h
    setcookie('numer_karty', $numer_karty, time() + 3600);
    setcookie('imie_nazwisko', $imie_nazwisko, time() + 3600);
    setcookie('ilosc_osob', $ilosc_osob, time() + 3600);
} else {
    echo "<p>Zawaliles sprawe</p>";
}
?>

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

        h1 {
            font-size: 60px;
        }
    </style>
</head>
<body>
<h1>Strona 2</h1>
<form action="strona3.php" method="post">
    <?php
    //dla kazdej osoby stworz echo i input
    if (isset($ilosc_osob)) {
        for ($i = 1; $i <= $ilosc_osob; $i++) {
            echo "<h3>Osoba $i</h3>";
            echo "<label>Imię i nazwisko:</label>";
            echo "<input type='text' name='imie_nazwisko$i'><br><br>";
        }
        echo "<input type='hidden' name='numer_karty' value='$numer_karty'>";
        echo "<input type='hidden' name='imie_nazwisko' value='$imie_nazwisko'>";
        echo "<input type='hidden' name='ilosc_osob' value='$ilosc_osob'>";
        echo "<input type='submit' value='Dalej'>";
    }
    ?>
    <button type="submit" name="zapisz_do_ciastka">Zapisz sesje do ciastka</button>
</form>
</body>
</html>