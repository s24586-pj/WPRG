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
    <h1>Brama</h1>
    <ul>
    <?php
// Lista adresów IP dla których wyświetlamy inną stronę
$dostepne_adresy = array("127.0.0.1", "::1", "192.168.1.1", "79.186.3.164", "192.168.56.1", "216.58.213.174");

// Sprawdzenie adresu IP użytkownika
$uzytkownik_ip = $_SERVER['REMOTE_ADDR'];

// Sprawdza czy zgada sie adres ip dostepnymi adresami,jeśli tak, to wyświetlamy strone dla wyjątkowych a dla innych niedziala
if (in_array($uzytkownik_ip, $dostepne_adresy)) {
  require('dziala.php');
} else {
  require('nie_dziala.php');
}
?>
	</ul>

</body>

</html>