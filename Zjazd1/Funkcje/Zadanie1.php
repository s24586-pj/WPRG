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
    <?php
    //tworzenie funkcji
     function RzutKostka()
     {
        //przypisanie do zmiennej liczby losowej od 1-6 najpierw min potem max
        $zm=rand(1,6);
        echo "Wylosowano:", $zm;
     }
    //wywołanie kostki
     RzutKostka()
    ?>
</body>
</html>