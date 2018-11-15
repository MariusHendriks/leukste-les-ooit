
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	Naam:<input type="text" name="Naam"><br>
	Leeftijd: <input type="number" name="Leeftijd"><br>
	<input type="submit" value="verzenden">
</form>

<?php
$Naam = $_POST['Naam'];
$leeftijd = $_POST['Leeftijd'];
echo "Mijn naam is ". $Naam ." en ik ben ". $leeftijd . " jaar oud";

?>


</body>
</html>
