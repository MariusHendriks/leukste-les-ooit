<html>
	
		<form method="post">

			Naam: <input type="text" name="Naam" />
			Leeftijd:<input type="number" name="Leeftijd" />
			<input type="submit" value="Verzenden">
		</form>
<br>



<?php

$Naam=$_POST['Naam'];
$Leeftijd=$_POST['Leeftijd']; 

Echo "Mijn naam is ".$Naam." ik ben ".$Leeftijd." jaar oud ";







?>




</html>