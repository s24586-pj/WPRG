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
    <form method="post">
        <label for="liczba">Podaj numer do tabliczki:  </label><br>
        <input type="text" id="liczba" name="liczba"><br>
        <button type="submit">Sprawdz tabliczke</button>
    </form>
    

    <?php
    //zmienne do petli
     $i;
     $j;
        //bierzemy wartość z inputa
        if (isset($_POST['liczba'])) {
            $SprawdzLiczbe = $_POST['liczba'];

            //pętla w pętli 1*1,1*2...1*SprawdzLiczbe=>(i++) i od nowa 2*1 etc
            for($i=1;$i<=$SprawdzLiczbe;$i++){
               for($j=1;$j<=$SprawdzLiczbe;$j++){
                echo $i*$j;
                echo "\n";
               }
               echo "<br>";
              
            }
        }
    ?>
</body>
</html>