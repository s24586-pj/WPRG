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
    <h1>Tworzenie/Odczytywanie/Usuwanie katalogow</h1> 
    </form>


    <?php
   function DzialanieNaFolderze($sciezka, $Nazwa_folderu, $Nazwa_operacji = 'read') {
    
    // Sprawdzanie czy istnieje katalog o podanej ścieżce
    if(!file_exists($sciezka)) {
        return "Katalog nie istnieje";
    }
    
    switch($Nazwa_operacji) {
        case 'read':
            // Sprawdzanie czy ścieżka jest do katalogu
            if(!is_dir($sciezka)) {
                return "Podana ścieżka nie jest do katalogu";
            }
            
            // Odczytywanie zawartości katalogu
            $folder = scandir($sciezka);
             //array_diff() usuwa dwie wartosci katalogu nadrzędnego i bieżącego.
            $folder = array_diff($folder, array('..', '.')); 
            
            // Zwrócenie listy elementów
            return implode("<br>", $folder);
            
        case 'delete':
            // Sprawdzanie czy ścieżka jest do katalogu
            if(!is_dir($sciezka)) {
                return "Podana ścieżka nie jest do katalogu";
            }
            
            // Sprawdzanie czy katalog jest pusty
            //scandir służy do odczytu zawartości katalogu i zwraca tablice 
            //jesli pusty nie bedzie zawierać zadnych elementow wtedy znaczy ze jest pusty 
            $pusty = !(bool) array_diff(scandir($sciezka), array('..', '.'));
            if(!$pusty) {
                return "Katalog nie jest pusty";
            }
            
            // Usuwanie katalogu
            if(rmdir($sciezka)) {
                return "Katalog został usunięty";
            } else {
                return "Nie udało się usunąć katalogu";
            }
            
        case 'create':
            // Tworzenie katalogu
            $nowyFolder = $sciezka . $Nazwa_folderu;
            if(mkdir($nowyFolder)) {
                return "Katalog został utworzony";
            } else {
                return "Nie udało się utworzyć katalogu";
            }
            
        default:
            return "Nieprawidłowy typ operacji";
    }
}

//zmienamy wartosci zaleznosci gdzie chcemy folder co chcemy z nim i jak go nazwac
$sciezka = './WPRG';
$Nazwa_folderu = 'Nowy_folder_WPRG';
//create,delete i read
$Nazwa_operacji = 'create';

//wywolanie funkcji i zwracanie return'a
echo DzialanieNaFolderze($sciezka, $Nazwa_folderu, $Nazwa_operacji);


	?>


</body>

</html>