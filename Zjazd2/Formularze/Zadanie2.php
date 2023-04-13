<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rezerwacja hotelu</title>
    <style>
        h1{
            text-align: center;
            font-size: 3em;
        }
        body{
            
            background-color: aqua;
        }
        label, input {
            display: flex;
       
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Rezerwacja hotelu</h1>
    <!-- Tworzenie inputow etc (wprowadzania danych) -->
    <form method="post">
        <label for="liczba_osob">Liczba osób:</label>
        <select name="liczba_osob" id="liczba_osob">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <label for="imie">Imię:</label>
        <input type="text" name="imie" id="imie" required>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko" id="nazwisko" required>
        <label for="adres">Adres??:</label>
        <input type="text" name="adres" id="adres" required>
        <label for="karta_kredytowa">Dane karty kredytowej:</label>
        <input type="text" name="karta_kredytowa" id="karta_kredytowa" required>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <label for="data_pobytu">Data pobytu:</label>
        <input type="date" name="data_pobytu" id="data_pobytu" required>
        <label for="godzina_przyjazdu">Godzina przyjazdu:</label>
        <input type="time" name="godzina_przyjazdu" id="godzina_przyjazdu" required>
        <label for="dostawka">Czy potrzebna dostawka dla dziecka?</label>
        <input type="checkbox" name="dostawka" id="dostawka">
        <label for="udogodnienia">Dodatkowe udogodnienia:</label>
        <select name="udogodnienia[]" id="udogodnienia" multiple>
            <option value="klimatyzacja">Klimatyzacja</option>
            <option value="popielniczka">Popielniczka dla palaczy</option>
            <option value="Lozko">Dodatkowe lozko</option>
            <option value="Wino">Wino</option>
        </select>
        <input type="submit" value="Zarezerwuj">
    </form>


     <?php
     //sprawdza czy formularz został wysłany motodą post
      if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
        //Przypisanie wartosci z inputu do zmiennych
        $liczba_osob = $_POST['liczba_osob'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $adres = $_POST['adres'];
        $karta_kredytowa = $_POST['karta_kredytowa'];
        $email = $_POST['email'];
        $data_pobytu = $_POST['data_pobytu'];
        $godzina_przyjazdu = $_POST['godzina_przyjazdu'];
        
        //implode powoduje polczenie tekstu i sprawdzamy metoda warunkowa
        $dostawka = isset($_POST['dostawka']) ? 'Tak' : 'Nie';
        $udogodnienia = isset($_POST['udogodnienia']) ? implode(', ', $_POST['udogodnienia']) : 'Brak';
    
        
    
        // wyświetlenie naszej rezerwacji 
        echo "<h1>Podsumowanie rezerwacji</h1>";
        echo "<p>Liczba osób: $liczba_osob</p>";
        echo "<p>Imię: $imie</p>";
        echo "<p>Nazwisko: $nazwisko</p>";
        echo "<p>Adres: $adres</p>";
        echo "<p>Dane karty kredytowej: $karta_kredytowa</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Data pobytu: $data_pobytu</p>";
        echo "<p>Godzina przyjazdu: $godzina_przyjazdu</p>";
        echo "<p>Potrzebna dostawka dla dziecka: $dostawka</p>";
        echo "<p>Dodatkowe udogodnienia: $udogodnienia</p>";
    }

    ?>

</body>
</html>