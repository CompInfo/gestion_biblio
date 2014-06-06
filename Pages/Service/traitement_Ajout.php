<?php

include("../../connexion/connexion1.php");
							if (isset($_POST['retour'])){header ('location:liste_service1.php');}
									 if (isset($_POST['ajouter']))
{
	
	$Nom_service=$_POST['nom_service'];
	$Methode=$_POST['methode_recherche'];
	$T_emprunt=$_POST['type_emprunt'];
	$O_recherche=$_POST['outils_recherche'];
	$C_documentation=$_POST['code_documentation'];
	
	
	}
									if( isset($Nom_service) && isset($Methode) && isset($T_emprunt) && isset($O_recherche) && isset($C_documentation)){
											   mysql_query("INSERT INTO services VALUES('','".$Nom_service."','".$Methode."','".$T_emprunt."','".$O_recherche."',".$C_documentation.")");
											   header ('location:liste_service1.php');
											   }


 
?>
