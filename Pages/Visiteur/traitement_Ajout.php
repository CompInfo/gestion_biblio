<?php
include("../../connexion/connexion1.php");
if (isset($_POST['retour'])){header ('location:liste_visiteur1.php');}
if (isset($_POST['ajouter']))
{
	
	$nom_v=$_POST['nom'];
	$prenom_v=$_POST['prenom'];
	$age_v=$_POST['age'];
	$fonction_v=$_POST['fonction'];
	$nbr_emprunter=$_POST['nbr_livre_emprunter'];
	$prenom_arab_v=$_POST['prenom_arab'];
	$nom_arab_v=$_POST['nom_arab'];
	
	}
									if( isset($nom_v) && isset($prenom_v) && isset($age_v) && isset($fonction_v) && isset($nbr_emprunter)&& isset($prenom_arab_v)&& isset($nom_arab_v)){
											   mysql_query("INSERT INTO visiteur VALUES('','".$nom_v."','".$prenom_v."',".$age_v.",'".$fonction_v."',".$nbr_emprunter.",'".$prenom_arab_v."','".$nom_arab_v."')");
											    header ('location:liste_visiteur1.php');
											   }
											   

?>
