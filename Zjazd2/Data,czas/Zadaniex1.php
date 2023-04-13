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
    p{
        font-weight: 400;
        font-size: 30px;
    }
</style>
</head>
<body>
    <h1>PODAJ DATE URODZENIA </h1>
    <!-- Tworzenie inputu -->
    <form method="get">
		<label for="data_urodzenia">Podaj swoją datę urodzenia:</label>
		<input type="date" id="data_urodzenia" name="data_urodzenia">
		<button type="submit" name="submit">Wyślij</button>
	</form>
    <?php
    if (isset($_GET['submit'])) {
		// Pobranie daty z formularza
		$data_urodzenia = $_GET['data_urodzenia'];

		// Zapisywanie danych do zmiennych w-zwraca numer dnia  y-rok
		$dzien = date('w', strtotime($data_urodzenia));
		$rok_urodzenia = date('Y', strtotime($data_urodzenia));
		//zapisywanie dzisiejsza daty
		$dzisiejsza_data = date('Y-m-d');
		//obliczamy roznice dzieki date_diff ->y oznacza ze wyciagamy liczbę lat w tej różnicy 
		$wiek = date_diff(date_create($data_urodzenia), date_create($dzisiejsza_data))->y;
        $roznica = date_diff(date_create($data_urodzenia), date_create($dzisiejsza_data));
		$najblizsze_urodziny = date('Y-m-d', strtotime($rok_urodzenia.'-'.date('m-d')));
		//zaokraglenie w dol
        $ilosc_dni = floor((strtotime($data_urodzenia) - strtotime($dzisiejsza_data)) / (60 * 60 * 24));

		// Wyświetlenie wyników
        echo "<p> dzien wysnułem z  (0 - niedziela, 1 - poniedziałek, itd.)";
		echo "<p>Urodziłeś/łaś się w dniu ";
		switch ($dzien) {
			case 0:
				echo "niedzielę";
				break;
			case 1:
				echo "poniedziałek";
				break;
			case 2:
				echo "wtorek";
				break;
			case 3:
				echo "środę";
				break;
			case 4:
				echo "czwartek";
				break;
			case 5:
				echo "piątek";
				break;
			case 6:
				echo "sobotę";
				break;
		}
		echo "</p>";
		echo "<p>Ukończyłeś/łaś już $wiek lat(a).</p>";

         if($ilosc_dni<0)
         {
            echo "<p>Musisz podac wieksz ktory dopiero nadejdzie by zadziałalo</p>";
         }
         else{
            echo "<p>Do Twoich najbliższych urodzin pozostało $ilosc_dni dni.</p>";
         }
    }
	?> 

    
</body>
</html>