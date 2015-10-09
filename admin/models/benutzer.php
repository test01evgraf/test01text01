<?php
class Benutzer
{
	private $id;
	private $benutzername;
	private $password;
	
	public function __construct(array $daten = array())
	{
		$this->setDaten($daten);
	}	
	
	public function setDaten(array $daten)
	{//wenn Array Daten enthält, dann entsprechenden Setter aufrufen
		if($daten)
		{//Durchlaufe das Array und gib Einzelwerte weiter
			foreach($daten as $schluessel => $wert)
			{	
				$setterName = 'set'.ucfirst($schluessel); //nur erste Buchstabe wird groß gesetzt durch ucfirst
				if( method_exists($this, $setterName) )
				{	//setter wird aufgerufen
					$this->$setterName($wert);
				}
			}
		}
	}
	
	
	
	
	public function getId()
	{
		return $this->id;
	}	
	
	
	
	
	public function getBenutzername()
	{
		return $this->benutzername;
	}
		
	
	public function getPassword()
	{
		return $this->password;
	}
	

	
	public function setBenutzername($benutzername)
	{
		$this->benutzername = $benutzername;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
	//Statische Methode zum auslesen aller Benutzern
	public static function getBenutzer($db)
	{
		$abfrage = $db->query("SELECT id, benutzername, password FROM `benutzer` ");
		$abfrage->setFetchMode(PDO::FETCH_CLASS, "Benutzer", array()); 
		$benutzern = $abfrage->fetchAll();
		return $benutzern;
		
	}
	
	public static function findBenutzer($db, $benutzernID)
	{
		$abfrage = $db->query("SELECT benutzername, password FROM benutzer WHERE id=$benutzernID");
		$abfrage->setFetchMode(PDO::FETCH_CLASS, "Benutzer", array()); 
		$benutzer = $abfrage->fetchAll();
		return $benutzer;
	}
}



?>