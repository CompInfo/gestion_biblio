<?php
include("../../connexion/connexion1.php");
						
if (isset($_POST['ajouter']))
{
	
	$Nom_Prenom=$_POST['nom_prenom'];
	$Tel=$_POST['tel'];
	$adresse=$_POST['Adresse'];
	$Code_Biblio=$_POST['code_biblio'];
	$Nom_Prenom_Arab=$_POST['nom_prenom_arab'];
	
	}
									if(isset($Nom_Prenom) && isset($Tel) && isset($adresse) && isset($Code_Biblio) && isset($Nom_Prenom_Arab)){
											   mysql_query("INSERT INTO responsable VALUES('','".$Nom_Prenom."',".$Tel.",'".$adresse."',".$Code_Biblio.",'".$Nom_Prenom_Arab."')");
											   		header('location:Liste_responsable1.php'); }


											   ?>
