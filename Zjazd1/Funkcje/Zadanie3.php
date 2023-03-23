<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-color: lightblue;
    }
    body{
        text-align: center;
    }
</style>
    <meta charset="UTF-8"> 
</head>
<body>
    <?php
    //funkcja przyjmujaca zdanie 
   function Cezura($zdanie) {
    //tablica z zakazanymi slowami 
    $niepozadaneSlowa = array("pis","Prawo","Sprawiedliwosc","Kocham","Ulubiona");
    //kopia oryginalnego zdania

    $zdanieOcenzurowane = $zdanie; 
    $i=0;
    //pętla zastępująca niepożądane słowa gwiazdkami
    while($i < count($niepozadaneSlowa)) {

      //przypisuje nieporządane slowa z tablicy do zmiennej (co ruch petli, nie wszystkie)
      $slowo = $niepozadaneSlowa[$i];

      //zmienia slowo (za pomoca str_ireplace),na ciąg gwiazdek dlugosci (strlen)
      $zdanieOcenzurowane = str_ireplace($slowo, str_repeat("*", strlen($slowo)), $zdanieOcenzurowane);

      //zwiększenie licznika
      $i++; 
    }

    //zwrócenie ocenzurowanego zdania
    return $zdanieOcenzurowane; 
  }
  //Zdanie ktore chcemy ocenzurować
  $zdanie = "Moja ulubiona partia to Prawo i Sprawiedliwosc";

  //Wrzucamy do funkcji
  $zdanieOcenzurowane = Cezura($zdanie);

  //wyswietlenie zdania przed i po cenzurze
  echo "Zdanie przed cenzurą: ", "<BR>", $zdanie;
  echo "<BR>";
  echo "Zdanie po cenzurze: ", "<BR>",$zdanieOcenzurowane;
    ?>
</body>
</html>