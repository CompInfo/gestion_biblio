<?php
include("../../connexion/connexion1.php");
if (isset($_POST['retour'])){header ('location:liste_visiteur1.php');}

											   
if (isset($_POST['modifier']))
{
	$Code_v=$_POST['code'];
	$nom_v=$_POST['nom'];
	$prenom_v=$_POST['prenom'];
	$age_v=$_POST['age'];
	$fonction_v=$_POST['fonction'];
	$nbr_emprunter=$_POST['nbr_livre_emprunter'];
	$prenom_arab_v=$_POST['prenom_arab'];
	$nom_arab_v=$_POST['nom_arab'];
	
	}
									if(isset($Code_v) &&  isset($nom_v) && isset($prenom_v) && isset($age_v) && isset($fonction_v) && isset($nbr_emprunter)&& isset($prenom_arab_v)&& isset($nom_arab_v)){
											   mysql_query("UPDATE  visiteur SET Nom_v='".$nom_v."', Prenom_v ='".$prenom_v."', Age =".$age_v.", Fonction='".$fonction_v."', Nbr_Livre=".$nbr_emprunter.", الاسم='".$prenom_arab_v."', النسب='".$nom_arab_v."' where Code_v=".$Code_v." ");
											    header ('location:liste_visiteur1.php');
											   }
?>
