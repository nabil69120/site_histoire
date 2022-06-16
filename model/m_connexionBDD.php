<?php

class ConnexionBDD
{
	private $cnx = null;
	private $bdd_host;
	private $bdd_user;
	private $bdd_pass;
	private $bdd_nombd;
	
	public static function getConnexion()
	{
		$bdd_host = bdd_host;
		$bdd_user = bdd_user;
		$bdd_pass = bdd_pass;
		$bdd_nombd = bdd_nombd;
		
		try
		{
			$cnx = new PDO("mysql:host=$bdd_host;dbname=$bdd_nombd",$bdd_user,$bdd_pass);
			$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cnx->exec('SET CHARACTER SET utf8'); 
		}
		catch(PDOException $e)
		{
			$erreur = $e->getMessage();
		}
		
		return $cnx;
	}
	public static function deConnexion()
	{
		try
		{
			$cnx = null;
		}
		catch(PDOException $e)
		{
			$erreur = $e->getMessage();
		}
	}
}

?>