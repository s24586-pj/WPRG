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
        <label for="liczba">Podaj liczbe losowych wartosci   </label><br>
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

    //tablica foreach
    function Maksymalna($tablica) {
        $max = $tablica[1];
        //
        foreach ($tablica as $liczba) {
            if ($liczba > $max) {
                $max = $liczba;
            }
        }
        return $max;
    }
    echo "Najwieksza wartosc to " .Maksymalna($tablica);
}
?>
</body>
</html>