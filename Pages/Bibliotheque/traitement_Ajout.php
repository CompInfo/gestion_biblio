<?php
include("../../connexion/connexion1.php");
						
if (isset($_POST['ajouter']))
{
	$nom=$_POST['nom'];
	$nomar=$_POST['nom_arabe'];
	$etat_juri=$_POST['etat_juri'];
	$tel=$_POST['tel'];
	$Faxe=$_POST['Faxe'];
	$Email=$_POST['Email'];
	$code_responsable=$_POST['code_responsable'];
	$code_province=$_POST['code_province'];
	
	
	}
									if(isset($nom) && isset($etat_juri) && isset($tel) && isset($Faxe) && isset($Email) && isset($code_responsable) && isset($code_province)){
											  mysql_query("INSERT INTO bibliothèque VALUES('','".$nom."','".$nomar."','".$etat_juri."',".$tel.",".$Faxe.",'".$Email."',".$code_responsable.",".$code_province.")");
											header('location:Liste_bibliotheque1.php');}



											   ?>
