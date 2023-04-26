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
    <h1>Odwracanie tekstu</h1>
    <form name="formularz" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
    <input type="file" name="plik">
    <input type="submit" name="zatwierdz" value="Wyślij plik">
</form>

    
<?php
if(isset($_POST["zatwierdz"]))
{
    if(isset($_FILES["plik"]))
    {
        //wyciągamy nazwe pliku oraz rozszerzenie (PATHINFO_EXTENSION zwraca nam tylko typ z pliku)
        $nazwa_pliku = basename($_FILES["plik"]["name"]);
        $typ_pliku = strtolower(pathinfo($nazwa_pliku, PATHINFO_EXTENSION));

        //sprawdzamy czy jest txt
        if($typ_pliku != "txt") {
            echo "Wybrany plik nie jest plikiem tekstowym.";
        } else {
            $plik_wyslany = $_FILES["plik"]["tmp_name"];
            // Otwieramy plik do odczytu
            $plik = fopen($plik_wyslany, "r");
            // Odczytujemy zawartość pliku i zapisujemy wiersze do tablicy
            $linie = array();
            //!feof() odcztyuje linijka po linijce zawartosc pliku a fgets zwracalinie  i zapisuje ją jako łańcuch znaków
            while(!feof($plik)) {
                $linia = fgets($plik);
                $linie[] = $linia;
            }
            // Wyswietlamy w echo kolejne linie
            for($i = count($linie) - 1; $i >= 0; $i--) {
                echo "<br>";
                echo $linie[$i];
            }
            // I za pomocą fclose zamykamy pliczek
            fclose($plik);
        }
    }
}
?>

</body>

</html>