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
    <h1>CIAAAAAAAAAAASTECZKA</h1> 
    <?php
$Ciastko  = "liczba_odwiedzin";
$Ilosc = 1;
 //sprawdzamy czy ciastko istnieje jesli tak dodajemy do tablicy wartosc ilosc +1 tak samo jak w poprzednim zadaniu 
if(isset($_COOKIE[$Ciastko ])) {
    $Ilosc = $_COOKIE[$Ciastko ];
}
//jesli nie odwiedzono wczesniej strony tworzymy ciastko przeładowanie ktore pozniej bedzie sprawdzac czy bylismy juz na tej stronie,jesli juz bylismy ciastko sie nie utworzy a licznik nie zwiekszy,
// jesli nie bylismy zwiekszy ilosc ciastka o 1 (tego który bedzie trwał tydzien)
if(!isset($_COOKIE["przeładowanie"])) {
    setcookie("przeładowanie", "tak", time() + (60), "/");
    $Ilosc++;
    setcookie($Ciastko , $Ilosc, time() + (86400 * 7), "/");
}

echo "Ilosc odwiedzinowych ciastek: " . $Ilosc;
?>
</body>

</html>