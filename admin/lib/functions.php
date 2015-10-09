<?php  
function validiereBeitrag(array $daten)
{
$fehler = array();
$titel = htmlspecialchars(trim($daten['titel']));
$datei = htmlspecialchars(trim($daten['bild']));
$dat = htmlspecialchars(trim($daten['thumbnail']));
$beginn = htmlspecialchars(trim($daten['beginn']));
$ende = htmlspecialchars(trim($daten['ende']));
	if(strlen($daten['titel'])<3)
	{
		$fehler[] = "Bitte prüfen Sie den Titel";
	}
	
	$pattern = '/^(19|20)[0-9]{2}[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/';
	if(!preg_match($pattern, $beginn))
	{
		$fehler[] = "Fehlerhaftes Format bitte folgendes Format eingeben 2000-11-30";
	}
	
	if(!preg_match($pattern, $ende))
	{
		$fehler[] = "Fehlerhaftes Format bitte folgendes Format eingeben 2000-11-30";
	}
	
	
	////////////////////////////////////////////////////////////////////
	if($beginn >= $ende)
	{
		$fehler[] = "Fehler: Enddatum beginnt früher als Beginndatum.";
	}
	

	
	
	
	
	
	
	
	$datei ="img/".$datei."";//prüefe ob datei existiert
	if(!file_exists($datei))
	{
		$fehler[] = "Bild existiert nicht, bitte Bildname genau eingeben, mit zB .jpg am Ende.";
	}
	
	$dat ="thumbnail/".$dat."";//prüefe ob datei existiert
	if(!file_exists($dat))
	{
		$fehler[] = "Thumbnail existiert nicht, bitte Thumbnail genau eingeben, mit zB .jpg am Ende.";
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