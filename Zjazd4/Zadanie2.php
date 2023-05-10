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

        p {
            font-weight: 400;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <h1>CIAAAAAAAAAAASTECZKA</h1> 
    <?php
  $Ciastko = "Ciastki_Z_Owiedzinami";
  $Ilosc = 1;
  //sprawdzamy czy ciastko istnieje jesli tak dodajemy do tablicy wartosc ilosc +1
  if(isset($_COOKIE[$Ciastko])) {
      $Ilosc = $_COOKIE[$Ciastko] + 1;
  }

  //setcoocie 1.nazwa 2.wartosc 3.Po jakim czasie wygasa (tydzien) 4.sciezka dla ktorej warosc cookie jest "wazna"
  setcookie($Ciastko, $Ilosc, time() + (86400 * 7), "/");
  //No i wypisanie naszej ilosci odwiedzin 
  echo "Ilosc odwiedzinowych ciastek: " . $Ilosc;
  ?>
</body>

</html>