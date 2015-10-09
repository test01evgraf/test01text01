<?php
/*Status für Prüfungen 
Status = 1  bedeutet sind eingelogt
Status = 2  nicht eingelogt

*/
include("lib/db.php");
include("models/benutzer.php");
$status =2;
/*prüfe ob EinlogButton betätigt wurde und ob q=admin
in URL gesetzt wurde 3 === pruft nach identitat sehr genau!!!  */





if(isset($_POST['login']) && $_GET['q'] === "admin") 
{
	$benutzer = $_POST['benutzer'];
	$passwort = $_POST['passwort'];
		
	
$benutzerarray = Benutzer::getBenutzer($db);

foreach($benutzerarray as $einzelbenutzer): 
					

	if($benutzer === $einzelbenutzer->getBenutzername() && $passwort === $einzelbenutzer->getPassword())
	{
		$_SESSION['benutzer'] = $benutzer;
		$status =1;
		header("Location:backend.php");
	}
	else
	{
		$status =3;
	}
	
	
 endforeach; 
	
	
}

if(!isset($_GET['q']) && !isset($_SESSION['benutzer']))
{
	$status = 2; 
}



?>