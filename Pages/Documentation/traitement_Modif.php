<?php
include("../../connexion/connexion1.php");




if (isset($_POST['modifier']))
			{
				$code=$_POST['code_docum'];
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
							if(isset($code) &&  isset($Langue) && isset($Nbr_livre) && isset($Nbr_livr_tom) && isset($Nb_cp_livre) && isset($Nbr_livre_titre) && isset($Etat) && isset($Evolution) && isset($Objet) && isset($C_bibl)){
								   mysql_query("UPDATE  documentation SET Langue='".$Langue."',Nbr_Livres=".$Nbr_livre.",Nbr_Livres_Tome=".$Nbr_livr_tom.",Nbr_Copie_Livre=".$Nb_cp_livre.",Nbr_Livre_Titre=".$Nbr_livre_titre.", Etat= '".$Etat."',Evolution='".$Evolution."',Objet ='".$Objet."',Code_Bibl=".$C_bibl." where Code_Doc=".$code."");

									    	header("Location: liste_documentation1.php");

											   }
											   ?>
