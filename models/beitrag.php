<?php 
class Beitrag
{
	private $id;
	private $titel;
	private $preis;
	private $kurzbeschreibung;
	private $beschreibung;
	private $beginn;
	private $ende;
	private $bild;
	private $thumbnail;
	private $region;
	
	
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
	
	public function getTitel()
	{
		return $this->titel;
	}
	
	public function getPreis()
	{
		return $this->preis;
	}
	
	public function getKurzbeschreibung()
	{
		return $this->kurzbeschreibung;
	}
	
	public function getBeschreibung()
	{
		return $this->beschreibung;
	}
	
	public function getBeginn()
	{
		return $this->beginn;
	}
	public function getEnde()
	{
		return $this->ende;
	}
	
	public function getBild()
	{
		return $this->bild;
	}
	public function getThumbnail()
	{
		return $this->thumbnail;
	}
	public function getRegion()
	{
		return $this->region;
	}
	
	
	
	
	public function setTitel($titel)
	{
		$this->titel = $titel;
	}
	public function setPreis($preis)
	{
		$this->preis = $preis;
	}
	
	public function setKurzbeschreibung($kurzbeschreibung)
	{
		$this->kurzbeschreibung = $kurzbeschreibung;
	}
	
	public function setBeschreibung($beschreibung)
	{
		$this->beschreibung = $beschreibung;
	}
	
	public function setBeginn($beginn)
	{
		$this->beginn = $beginn;
	}
	public function setEnde($ende)
	{
		$this->ende = $ende;
	}
	public function setBild($bild)
	{
		$this->bild = $bild;
	}
	public function setThumbnail($thumbnail)
	{
		$this->thumbnail = $thumbnail;
	}
	public function setRegion($region)
	{
		$this->region = $region;
	}
	
	
	
	//Statische Methode zum auslesen aller Beiträgen
	public static function getBeitraege($db)
	{
		$abfrage = $db->query("
		SELECT 
		b.id, 
		b.titel, 
		b.preis,
		b.kurzbeschreibung,
		b.beschreibung, 
		b.beginn,
		b.ende,
		b.bild,
		b.thumbnail,
		b.region
		
		FROM reisen AS b
		");
		$abfrage->setFetchMode(PDO::FETCH_CLASS, "Beitrag", array()); 
		$beitraege = $abfrage->fetchAll();
		return $beitraege;
		
	}
	
	
	public static function insertBeitrag($db, $daten)
	{
	
	
		$query=$db->prepare
		("INSERT INTO reisen
			(
		titel, 
		preis,
		kurzbeschreibung,
		beschreibung, 
		beginn,
		ende,
		bild,
		thumbnail,
		region
			)
			VALUES(?,?,?,?,?,?,?,?,?)"
		);
		$query->execute($daten);
	}
	
	public static function updateBeitrag($db, $daten)
	{
		  $query=$db->prepare
		  ("UPDATE reisen SET
		titel= :beitragstitel,
		preis= :reisepreis,
		kurzbeschreibung= :kurzbeschreib,
		beschreibung= :beschreib,
		beginn=:reisebeginn,
		ende=:reiseend,
		bild=:reisebild,
		thumbnail=:reisethumb,
		region=:reiseregion
		WHERE `ID`= :beitragsid "
		  );
		  
		  
		  $query->bindValue(":beitragsid", $daten['b_id'], PDO::PARAM_INT);
		  $query->bindValue(":beitragstitel", $daten['titel'], PDO::PARAM_STR);
		  $query->bindValue(":reisepreis", $daten['preis'], PDO::PARAM_INT);
		  $query->bindValue(":kurzbeschreib", $daten['kurzbeschreibung'], PDO::PARAM_STR);
		  $query->bindValue(":beschreib", $daten['beschreibung'], PDO::PARAM_STR);
		  $query->bindValue(":reisebeginn", $daten['beginn'], PDO::PARAM_STR);
		  $query->bindValue(":reiseend", $daten['ende'], PDO::PARAM_STR);
		  $query->bindValue(":reisebild", $daten['bild'], PDO::PARAM_STR);
		  $query->bindValue(":reisethumb", $daten['thumbnail'], PDO::PARAM_STR);
		  $query->bindValue(":reiseregion", $daten['region'], PDO::PARAM_STR);
		
		$query->execute();
	}	
	
	
	
	
	public static function delBeitrag($db, $id)
	{
		$index = $id;
		$query=$db->prepare
		("DELETE FROM `reisen` WHERE ID = '$index' " );
		$query->execute();
	}
	
	
	
	
	
	
	
	
	
	
	public static function holeBeitrag($db, $id)
	{
		$abfrage = $db->query("
		SELECT 
		b.id,
		b.titel, 
		b.preis,
		b.kurzbeschreibung,
		b.beschreibung, 
		b.beginn,
		b.ende,
		b.bild,
		b.thumbnail,
		b.region
		FROM reisen AS b WHERE id = $id
		");
		$abfrage->setFetchMode(PDO::FETCH_CLASS, "Beitrag", array()); 
		$beitrag = $abfrage->fetchAll();
		return $beitrag;
	
	
	}
	
	

	
	


}

?>