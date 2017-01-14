<?php
session_start();
require 'connexion.php';
$bdd = new connexion();

if (isset($_SESSION['id']) AND  isset($_GET['nom']) AND $_SESSION['id']=6) 
{
	$imageASupprimer = $_GET['nom'];
	$reqImage = $bdd->getConnexion()->prepare('DELETE FROM security WHERE filename="'.$imageASupprimer.'"');
	$reqImage->execute();
	$_SESSION['imageDel'] = true;
	header("Location: ../images.php?id=".$_SESSION['id']."");
	
}else
{
	header("Location: ../index.php");
}

?>