<?php 
session_start();

//include("lib/content_blog.php");
//include("lib/funktionen.php");

if(!isset($_SESSION['benutzer']))
{
	header("Location:login.php");
}



?>


<?php
include("lib/db.php");
include("models/region.php");
include("models/benutzer.php");
include("models/beitrag.php");
include("lib/functions.php");

if(isset($db))
{//wenn aktion da ist, übergibt er sie, sonst null
	$aktion = isset($_REQUEST['aktion']) ? $_REQUEST['aktion'] : null ;
	$view = $aktion;
	
	switch($aktion)
	{
		
		
		case "bearbeiten":
		$id = $_REQUEST['id'];
		$beitrag = Beitrag::holeBeitrag($db, $id);
		
		$regionen = Region::getRegionen($db);
		
		if(isset($_POST['updaten']))
		{//pruefe Daten auf Validitaet und 
			if(validiereBeitrag($_POST)===true)
			{
				//speichern in Datenbank
				$daten = array(
							'b_id'=>$id,
							'titel'=>$_POST['titel'], 
							'preis'=>$_POST['preis'],
							'kurzbeschreibung'=>$_POST['kurztext'], 
							'beschreibung'=>$_POST['beitragstext'], 
							'beginn'=>$_POST['beginn'],
							'ende'=>$_POST['ende'],
							'bild'=>$_POST['bild'],
							'thumbnail'=>$_POST['thumbnail'],
							'region'=>$_POST['region'] 

							);
							
				Beitrag::updateBeitrag($db, $daten);
				header("Location: index.php");
			}
			else
			{
				$fehler = validiereBeitrag($_POST);
			}
		}

		
			
		
		
		$view = "bearbeiten";
		
	
		break;
	
		
		
		case "single":
		$id = $_REQUEST['id'];
		$beitrag = Beitrag::holeBeitrag($db, $id);
		$regionen = Region::getRegionen($db);
		$view = "single";
		
	
		break;
		
		
		
		
		
		
	
	
	
		case "delete":
			$id = $_REQUEST['id'];
			Beitrag::delBeitrag($db, $id);
			header("Location: index.php");
		break;
			
			
			
			
			
		case "neu":
		$regionen = Region::getRegionen($db);
		
		if(isset($_POST['speichern']))
		{//pruefe Daten auf Validitaet und 
		
			if(validiereBeitrag($_POST)===true)
			{
				//speichern in Datenbank
				$daten = array(
							$_POST['titel'], 
							$_POST['preis'],
							$_POST['kurztext'],
							$_POST['beitragstext'], 
							$_POST['beginn'],
							$_POST['ende'],
							$_POST['bild'],
							$_POST['thumbnail'],
							$_POST['region'] 
							
							);
							
				Beitrag::insertBeitrag($db, $daten);
				header("Location: index.php");
			}
			else
			{
				$fehler = validiereBeitrag($_POST);
			}
		}
		
		$view = "neu";
		break;
	
	
		
	
	
		default:
		$beitraege = Beitrag::getBeitraege($db);
		$regionen = Region::getRegionen($db);
		
		$view ="anzeigen";
		break;
	}
	
	include("views/".$view.".tpl.php");
	
}


?>