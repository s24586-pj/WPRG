<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    body {
        background-color: lightblue;
    }
    body{
        text-align: center;
    }
    </style>
</head>
<body>
    <form method="post">
        <label for="liczba">Podaj liczbe losowych wartosci  </label><br>
        <input type="text" id="liczba" name="liczba"><br>
        <button type="submit">Sprawdz</button>
    </form>
    

    <?php
    //bierzemy liczbe
    if (isset($_POST['liczba'])) {
    $SprawdzLiczbe = $_POST['liczba'];

    // inicjalizujemy pustą tablicę
    $tablica = array();
    echo "tablica zawiera liczby <br>";
    // wypełniamy tablicę losowymi liczbami od 1-1000
    for ($i = 1; $i <= $SprawdzLiczbe; $i++) {
        $tablica[$i] = rand(1, 1000);
        echo $i.".  ".$tablica[$i]."<br>";       
    }

    //tablica for
    function Maksymalna($tablica) {
        //zlicza ilosc elementow w tablicy
        $n = count($tablica);
        //przypisujemy 1 wartosc tablicy do maxa
        $max = $tablica[1];
        for ($i = 1; $i < $n; $i++) {
            //jesli aktualna wartosc tablicy jest wieksza od max to teraz max zostaje najwieksza wartoscia
            if ($tablica[$i] > $max) {
                $max = $tablica[$i];
            }
        }
        return $max;
    }
   echo "Najwieksza wartosc to " .Maksymalna($tablica);

}
?>
</body>
</html>