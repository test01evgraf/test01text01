<?php
include("lib/db.php");
include("models/region.php");
include("models/beitrag.php");
include("lib/functions.php");


date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$datuma = date("Y-m-d",$timestamp);


if(isset($db))
{//wenn aktion da ist, übergibt er sie, sonst null
	$aktion = isset($_REQUEST['aktion']) ? $_REQUEST['aktion'] : null ;
	$view = $aktion;
	
	switch($aktion)
	{
		
		case "single":
		$id = $_REQUEST['id'];
		$beitrag = Beitrag::holeBeitrag($db, $id);
		$regionen = Region::getRegionen($db);
		$view = "single";
		break;
		
		case "impressum":
		
		$view = "impressum";
		break;
	
		case "filter":
		$id = $_REQUEST['id'];
		$beitraege1 = Beitrag::getBeitraege($db);
		$regionen = Region::getRegionen($db);
		
		
		
		foreach($beitraege1 as $einzelbeitrag)
		{
			if($datuma <= $einzelbeitrag->getBeginn() && $einzelbeitrag->getRegion() == $id)
			{
				$beitraege[] = $einzelbeitrag;
			}
		}
		
		$view ="anzeigen";
		break;
		
	
	
	
		default:
		$beitraege1 = Beitrag::getBeitraege($db);
		$regionen = Region::getRegionen($db);

		foreach($beitraege1 as $einzelbeitrag)
		{
			if($datuma <= $einzelbeitrag->getBeginn())
			{
				$beitraege[] = $einzelbeitrag;
			}
		}
		$view ="anzeigen";
		break;
	}
	
	include("views/".$view.".tpl.php");
	
}


?>