<?php
class Region
{
	private $id;
	private $name;
	
	
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
		
	public function getName()
	{
		return $this->name;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	
	//Statische Methode zum auslesen aller Regionen
	public static function getRegionen($db)
	{
		$abfrage = $db->query("SELECT id, name FROM regionen");
		$abfrage->setFetchMode(PDO::FETCH_CLASS, "Region", array()); 
		$regionen = $abfrage->fetchAll();
		return $regionen;
		
	}
	
	public static function findRegion($db, $regionenID)
	{
		$abfrage = $db->query("SELECT name FROM regionen WHERE id=$regionenID");
		$abfrage->setFetchMode(PDO::FETCH_CLASS, "Region", array()); 
		$region = $abfrage->fetchAll();
		return $region;
	}
}



?>