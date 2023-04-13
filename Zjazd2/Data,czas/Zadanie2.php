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

        p {
            font-weight: 400;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <h1>CZAS </h1>
    <!-- Tworzenie inputu -->
    <form method="get">
        <label for="$Liczba ">Podaj liczbe:</label>
        <input type="text" id="Liczba " name="$Liczba" required >
        <button type="submit" name="submit">Wyślij</button>
    </form>


    <?php
    //start od submitu
    if (isset($_GET['submit'])) {
        //typowe przypisanie wartosci do liczby
    $Liczba = $_GET['$Liczba'];

   // rekurencyjna funkcja obliczająca silnię
function silnia($Liczba) {
    if ($Liczba == 0) {
        return 1;
    } else {
        return $Liczba * silnia($Liczba - 1);
    }
}

// nierekurencyjna funkcja obliczająca silnię
function silnia_nierekurencyjna($Liczba) {
    $result = 1;
    for ($i = 1; $i <= $Liczba; $i++) {
        $result *= $i;
    }
    return $result;
}
	
// rekurencyjna funkcja obliczająca n-ty wyraz ciągu Fibonacciego
function fib($Liczba) {
    if ($Liczba == 0) {
        return 0;
    } elseif ($Liczba == 1) {
        return 1;
    } else {
        return fib($Liczba - 1) + fib($Liczba - 2);
    }
}
// nierekurencyjna funkcja obliczająca n-ty wyraz ciągu Fibonacciego
function fib_nierekurencyjny($Liczba) {
    if ($Liczba == 0) {
        return 0;
    }
    $poprzednia = 0;
    $aktualna = 1;
    for ($i = 1; $i < $Liczba; $i++) {
        $temp = $aktualna;
        $aktualna += $poprzednia;
        $poprzednia = $temp;
    }
    return $aktualna;
}

// Wywoływanie funkcji i startowanie czasu microtime [microtime(true) -> zwrócenie czasu liczby zmiennoprzecinkowej  zamiast znakow]
$start_czasu = microtime(true);
$silnia = silnia($Liczba);
$koniec_czasu = microtime(true);
echo "<p>Silnia: $silnia";
echo "<p>Czas wykonania funkcji rekurencyjnej: " . ($koniec_czasu - $start_czasu) . " sekund";


$start_czasu = microtime(true);
$silnia = silnia_nierekurencyjna($Liczba);
$koniec_czasu = microtime(true);
echo "<p>Silnia: $silnia";
echo "<p>Czas wykonania funkcji nierekurencyjnej: " . ($koniec_czasu - $start_czasu) . " sekund";


$start_czasu = microtime(true);
$fib = fib($Liczba);
$koniec_czasu = microtime(true);
echo "<p>Wyraz ciągu Fibonacciego: $fib";
echo "<p>Czas wykonania funkcji rekurencyjnej: " . ($koniec_czasu - $start_czasu) . " sekund";


$start_czasu = microtime(true);
$fib = fib_nierekurencyjny($Liczba);
$koniec_czasu = microtime(true);
echo "<p>Wyraz ciągu Fibonacciego: $fib";
echo "<p>Czas wykonania funkcji rekurencyjnej: " . ($koniec_czasu - $start_czasu) . " sekund";
    }
	?>


</body>

</html>