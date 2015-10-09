<?php
//localhost ist name der Datenbank (appm52) 
$dsn = "mysql:host=127.0.0.1;dbname=bagobag";
$user = "root";
$pass = "";
$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_PERSISTENT => true,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	);
	


try
{//Instanz von PDO (Datenbaknverbindung aufbauen)
$db = new PDO($dsn, $user, $pass, $options);
//UTF für Querys
$db->query("SET NAMES utf8");
}
catch(PDOException $err)
{
	echo "Fehler aufgetreten"; 
	echo $err->getMessage();
}


?>