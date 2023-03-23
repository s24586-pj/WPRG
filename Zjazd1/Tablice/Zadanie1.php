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
        <label for="liczba">Podaj swoj numer:  </label><br>
        <input type="text" id="liczba" name="liczba"><br>
        <button type="submit">Sprawdz co kryje sie pod tym indexem</button>
    </form>
   
    <?php
        // inicjalizujemy pustą tablicę
        $tablica = array();
        // wypełniamy tablicę 10 losowymi liczbami od 1-1000
        for ($i = 0; $i < 10; $i++) {
            $tablica[$i] = rand(1, 1000);
        }

        //bierzemy wartość z inputa
        if (isset($_POST['liczba'])) {
            $SprawdzLiczbe = $_POST['liczba'];

            //tablica zaczyna się od 0 dlatego -1
            if (array_key_exists($SprawdzLiczbe-1, $tablica)) {
                echo "Pod tym indexem kryje się: " . $tablica[$SprawdzLiczbe-1] . "<br>";
                
                 // wyświetlamy tablicę 
                print_r($tablica);
            } else {
                echo "Wartość tablicy o indeksie -1 nie istnieje.<br>";
            }
     
        }
    ?>
</body>
</html>