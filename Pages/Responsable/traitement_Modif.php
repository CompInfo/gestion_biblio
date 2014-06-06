<?php
include("../../connexion/connexion1.php");
						



if (isset($_POST['modifier']))
{
	$Code=$_POST['code'];
	$Nom_Prenom=$_POST['nom_prenom'];
	$Tel=$_POST['tel'];
	$adresse=$_POST['Adresse'];
	$Code_Biblio=$_POST['code_biblio'];
	$Nom_Prenom_Arab=$_POST['nom_prenom_arab'];
	
	}
									if(isset($Code) &&  isset($Nom_Prenom) && isset($Tel) && isset($adresse) && isset($Code_Biblio) && isset($Nom_Prenom_Arab)){
											   mysql_query("UPDATE  responsable SET Nom_resp ='".$Nom_Prenom."', Tel_resp =".$Tel.", Adresse_resp ='".$adresse."', Code_bibl=".$Code_Biblio.", الاسم_النسب ='".$Nom_Prenom_Arab."' where Code_resp=".$Code." ");
											   echo("modif terminer ");
											   }
											   ?>
