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
    //tworzenie funkcji z przyjmujacym argumentem
    function SrednicaKola($promien)
    {
        $srednica = $promien * 2;
        return $srednica;
    }
    //wywolanie funkcji z promieniem =2
    echo "Srednica kola wynosi:", SrednicaKola(2);
    ?>
</body>
</html>