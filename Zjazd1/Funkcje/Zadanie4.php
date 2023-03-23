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
    <!-- Tworzenie inputu gdzie bedzie mozna podac swoj wiek,mozna tez zrobic to z reki tworzac zmienna pesel w funkcji -->
    <form method="post">
        <label for="pesel">Podaj swoj numer pesel:  </label><br>
        <input type="text" id="pesel" name="pesel">
        <button type="submit">Sprawdz</button>
    </form>


    <?php
    //sprawdza czy jest a potem odbiera,odebranie peselu z inputu i przypisanie jej do zmiennej DataUrodzenia
   if (isset($_POST['pesel'])) {
       $pesel = $_POST['pesel'];
       $DataUrodzenia = DataUrodzeniaZPeselu($pesel);
       echo "Data urodzenia: $DataUrodzenia";
       
   }
    //pesel sklada sie z 11 liczb {RR MM DD} to bedzie nas interesowac
    //PPPP K<- plec i K – to cyfra kontrolna.
    
    function DataUrodzeniaZPeselu($pesel) {
        //zbieranie fragmentow z peselu substr
        $rok = substr($pesel, 0, 2);
        $miesiac = substr($pesel, 2, 2);
        $dzien = substr($pesel, 4, 2);
        
        //jesli miesiac czyli substr($pesel, 2, 2); jest wiekszy od 80 to do roku dodajemy wartosc do roku i odejmujemy to 80
        if ($miesiac > 80) {
            $rok += 1800;
            $miesiac -= 80;
        } elseif ($miesiac > 60) {
            $rok += 2200;
            $miesiac -= 60;
        } elseif ($miesiac > 40) {
            $rok += 2100;
            $miesiac -= 40;
        } elseif ($miesiac > 20) {
            $rok += 2000;
            $miesiac -= 20;
        } else {
            $rok += 1900;
        }
        
        //zwracamy w formacie -
        return $dzien . '-' . $miesiac . '-' . $rok;
    }
    
    ?>
</body>

</html>