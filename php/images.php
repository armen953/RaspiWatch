<?php
session_start();
require 'connexion.php';
$bdd = new connexion();

if (isset($_POST['recherche']) AND isset($_POST['valider'])){
	if ($_POST['recherche']=="")
	{
		$_SESSION['req'] = "SELECT * FROM security";
	}else{
		$recherche = $_POST['recherche']; 
		$_SESSION['req'] = "SELECT * FROM security WHERE time_stamp LIKE '%".$recherche."%'";
		//echo $_SESSION['req'];
	}
	header("Location: ../images.php?id=".$_SESSION['id']."");
}


	


?>