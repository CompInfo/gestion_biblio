<?php

include("../../connexion/connexion1.php");
						
	
							if (isset($_POST['retour'])){header ('location:liste_service1.php');}

						
	
 if (isset($_POST['modifier']))
{
	$Code=$_POST['code_service'];
	$Nom_service=$_POST['nom_service'];
	$Methode=$_POST['methode_recherche'];
	$T_emprunt=$_POST['type_emprunt'];
	$O_recherche=$_POST['outils_recherche'];
	$C_documentation=$_POST['code_documentation'];
	
	
	}
									if(isset($Code) &&  isset($Nom_service) && isset($Methode) && isset($T_emprunt) && isset($O_recherche) && isset($C_documentation)){
											   mysql_query("UPDATE  services SET  Nom_serv='".$Nom_service."',Méthode_recherche='".$Methode."',Type_Emprunt ='".$T_emprunt."',Outils_recherche ='".$O_recherche."',Code_Doc=".$C_documentation." WHERE Code_serv =".$Code." ");
													header('location:Liste_service1.php')	;										   
											   }
?>
