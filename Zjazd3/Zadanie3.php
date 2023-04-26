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
    <h1>Licznik</h1>
    <ul>
	<?php
		// Otwieramy plik z listą
		$plik = fopen("lista.txt", "r");

		//odczytujemy linijka po linijce i wypisujemu adres oraz opis strony jako lista
		while (!feof($plik)) {
			$linia = fgets($plik);
			if ($linia) {
                //rtrim usuwa białe znaki
				$linia = rtrim($linia);
                //rozdziela po sredniku explode
				$odnosnik = explode(";", $linia);
                //przypisuje nam odpowiednio z odnosnika adresu i opisu
				$adres = $odnosnik[0];
				$opis = $odnosnik[1];
				echo "<li><a href=\"$adres\">$opis</a></li>";
			}
		}

		// Zamykamy plik
		fclose($plik);
	?>
	</ul>

</body>

</html>