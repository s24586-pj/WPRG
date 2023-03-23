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
    <h1>KALKULATOR POL POWIERZCHNI </h1>
    <!-- Tworzenie inputu -->
    <form method="post">
        <label for="figura">Jaką figurę chcesz obliczyć (trojkąt,prostokąt,trapez) </label><br>
        <input type="text" id="figura" name="figura"><br>
        <label for="wymiary">Wymiary <br> (wprowadzasz po przecinku np trojkat 2,3)<br>(trapez 1,2,3)<br>(prostokąt 2,2)<br></label>
        <input type="text" id="wymiary" name="wymiary">
        <br>
        <button type="submit">Sprawdź</button>
    </form>
    <?php
        //zbieranie wartości
        if (isset($_POST['figura'])) {
            $figura = $_POST['figura'];
           
        }
        if (isset($_POST['wymiary'])) {
            $wymiary = $_POST['wymiary'];
            $wynik = obliczPole($figura, $wymiary);
            echo $wynik;
        }
        //funkcja przyjmująca dane z inputu
        function obliczPole($figura, $wymiary) {
            switch ($figura) {
                //tworzymy switcha ktory ma 'pudelka' z figurami i wymiary to tablica ktora przyjmuje wartosci oddzielając je po przecinku (explode)
                case 'trójkąt': 
                    $wymiary = explode(',', $wymiary);
                    $a = $wymiary[0];
                    $h = $wymiary[1];
                    $pole = 0.5 * $a * $h;
                    return "Pole trójkąta wynosi: $pole";
                    break;
                case 'prostokąt':
                    $wymiary = explode(',', $wymiary);
                    $a = $wymiary[0];
                    $b = $wymiary[1];
                    $pole = $a * $b;
                    return "Pole prostokąta wynosi: $pole";
                    break;
                case 'trapez':
                    $wymiary = explode(',', $wymiary);
                    $a = $wymiary[0];
                    $b = $wymiary[1];
                    $h = $wymiary[2];
                    $pole = 0.5 * ($a + $b) * $h;
                    return "Pole trapezu wynosi: $pole";
                    break;
                    //jesli uzytkownik wpisze cos oprocz tych 3 figur
                default:
                    return "Nie znam takiej figury";
            }
        }
    ?>

    
</body>
</html>