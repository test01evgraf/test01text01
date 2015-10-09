<?php  


function validiereBeitrag(array $daten)
{
$fehler = array();
$titel = htmlspecialchars(trim($daten['titel']));
$beginn = htmlspecialchars(trim($daten['beginn']));


	if(strlen($daten['titel'])<3)
	{
		$fehler[] = "Bitte prüfen Sie den Titel";
	}
	
	$pattern = '/^(19|20)[0-9]{2}[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/';
	if(!preg_match($pattern, $beginn))
	{
		$fehler[] = "Fehlerhaftes Format bitte folgendes Format eingeben 2000-11-30";
	}

	if(empty($fehler))
	{
		return true;
	}
	else
	{
		return $fehler;//ansonsten geben fehlerarray zurück und lasse es ausgeben
	}
	
}







?>