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
    <h1>Czy dana liczba jest liczbą pierwszą</h1>
    <!-- Tworzenie inputu -->
    <form method="post" action="">
        <label for="liczba">Podaj liczbę:</label>
        <input type="number" id="liczba" name="liczba" required>
        <button type="submit" name="submit">Sprawdź</button>
    </form>
    <?php
         //sprawdzamy czy przycisk zostal klikenity
        if (isset($_POST['submit'])) {
            //przypisanie wartosci to zmiennej
            $liczba = $_POST['liczba'];
            $licznik = 0;
            // Sprawdzenie, czy jest-> liczba potem czy  jest dodatnia i całkowita
            if (!is_numeric($liczba) || $liczba < 1 || $liczba != round($liczba)) {
                echo "Podaj dodatnią liczbę całkowitą.";
            } else {

                // Funkcja sprawdzająca, czy liczba jest liczbą pierwszą
                function czy_pierwsza($liczba) {
                    if ($liczba < 2) {
                        return false;
                    }
                    for ($i = 2; $i <= sqrt($liczba); $i++) {
                        if ($liczba % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }

                // Wywołanie funkcji i wyświetlenie wyniku do liczby ktorą podalismy w inpucie
                if (czy_pierwsza($liczba)) {
                    echo "$liczba jest liczbą pierwszą.";
                } else {
                    echo "$liczba nie jest liczbą pierwszą.";
                }
            }    
            
            //zliczenie ile razy iteracji potrzebnych do wykonania obliczeń (licznik sie zwieksza gdzie wyzej przypisalimy wartosc 0)
           for($i = 2; $i <= sqrt($liczba); $i++) {
           $licznik++;
           if($liczba % $i == 0) {
           break;
        }}
           echo "<br>";
           echo "Liczba iteracji potrzebnych do wykonania obliczeń: $licznik";   
        }

        
    ?>


</body>

</html>