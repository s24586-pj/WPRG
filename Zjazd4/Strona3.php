<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: lightblue;
        }

        body {
            text-align: center;
        }

        p {
            font-weight: 400;
            font-size: 15px;
        }
        h1{
            font-size: 60px;
        }
    </style>
</head>
<body>
	<h1>Strona 3.Podsumowanie zamówienia</h1>
	<?php
    //przypisanie wartosci..
		$numer_karty = $_POST['numer_karty'];
		$imie_nazwisko = $_POST['imie_nazwisko'];
		$ilosc_osob = $_POST['ilosc_osob'];

		// Na kogo zamawiane
		echo "<h2>Dane zamawiającego:</h2>";
		echo "<p>Numer karty: $numer_karty</p>";
		echo "<p>Imię i nazwisko: $imie_nazwisko</p>";
		echo "<p>Ilość osób: $ilosc_osob</p>";

		// Goscie i ich dane
		echo "<h2>Dane gości:</h2>";
		for ($i = 1; $i <= $ilosc_osob; $i++) {
			$imie_nazwisko_osoby = $_POST["imie_nazwisko$i"];
			echo "<h3>Osoba $i</h3>";
			echo "<p>Imię i nazwisko: $imie_nazwisko_osoby</p>";
		}
	?>
</body>
</html>