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
	<h1>Strona 1</h1>
	<form action="strona2.php" method="post">
		<label>Numer karty:</label>
		<input type="text" name="numer_karty" required><br><br>
		<label>Imię i nazwisko zamawiającego:</label>
		<input type="text" name="imie_nazwisko" required><br><br>
		<label>Ilość osób:</label>
		<input type="number" name="ilosc_osob" required><br><br>
		<input type="submit" value="Dalej">
	</form>
</body>
</html>
