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
        <label for="narodowosc">Podaj kraj:</label><br>
        <input type="text" id="narodowosc" name="narodowosc"><br>
        <button type="submit">Sprawdz kim jesteś</button>
    </form>
   
    <?php
    //bierzemy wartosc z inputa
    if (isset($_POST['narodowosc'])) {
        $narodowsc = $_POST['narodowosc'];

        //tablica asocjacyjna z narodowosciami 
        $narodowosci = array(
            'Polska' => 'Polak',
            'Rosjan' => 'Rosjanin',
            'Stany Zjednoczone' => 'Amerykanin',
            'Japonia' => 'Japończyk',
            'Niemcy' => 'Niemiec'
        );
         //csprawdzenie czy znajduje sie w naszej tablicy,zwrocenie wartosci odpowiednio zaleznej do podanego przykladu (jesli jest podaje narodowosc,jesli nie ma to wypisuje ze ine zna)
        if (array_key_exists($narodowsc, $narodowosci)) {
            $narodowosc = $narodowosci[$narodowsc];
            echo "Jesteś $narodowosc.";
        } else {
            echo "Nie ma w tablicy takiego kraju";
        }
    }
    ?>
</body>
</html>