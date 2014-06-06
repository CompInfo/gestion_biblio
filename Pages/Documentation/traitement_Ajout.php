<?php
include("../../connexion/connexion1.php");
						
if (isset($_POST['ajouter']))
			{
				$Langue=$_POST['langue'];
				$Nbr_livre=$_POST['nbr_livre'];
				$Nbr_livr_tom=$_POST['nbr_livre_tome'];
				$Nb_cp_livre=$_POST['nbr_copie_livre'];
				$Nbr_livre_titre=$_POST['Nb_livre_titre'];
				$Etat=$_POST['etat'];
				$Evolution=$_POST['evolution'];
				$Objet=$_POST['objet'];
				$C_bibl=$_POST['code_bibliotheque'];
				
				}
							if(isset($Langue) && isset($Nbr_livre) && isset($Nbr_livr_tom) && isset($Nb_cp_livre) && isset($Nbr_livre_titre) && isset($Etat) && isset($Evolution) && isset($Objet) && isset($C_bibl)){
								   $req=mysql_query("INSERT INTO documentation VALUES('','".$Langue."',".$Nbr_livre.",".$Nbr_livr_tom.",".$Nb_cp_livre.",".$Nbr_livre_titre.",'".$Etat."','".$Evolution."','".$Objet."',".$C_bibl.")");
									   if(!$req)
echo mysql_error();
else
	header("Location: liste_documentation1.php");
		
}



											   ?>
