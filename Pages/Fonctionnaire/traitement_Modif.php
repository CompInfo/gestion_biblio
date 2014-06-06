<?php

include("../../connexion/connexion1.php");
						

if (isset($_POST['modifier']))
		{
			$code=$_POST['code_fonctionnaire'];
			$Appart=$_POST['appartenance'];
			$c_cadre=$_POST['code_cadre'];
			$c_niveau=$_POST['code_niveau'];
			$c_formation=$_POST['code_formation'];
			$c_diplome=$_POST['code_diplome'];
			$c_biblio=$_POST['code_bibliotheque'];
			$nom=$_POST['nomprenom'];
			$nomar=$_POST['nomar'];
			
			}
											if(isset($code) &&  isset($Appart) && isset($c_cadre) && isset($c_niveau) && isset($c_formation) && isset($c_diplome) && isset($c_biblio) && isset($nom) && isset($nomar)){
											   mysql_query("UPDATE  fonctionnaire SET Appartenance='".$Appart."',code_cadre=".$c_cadre.",Code_Niveau =".$c_niveau.",Code_formation=".$c_formation.",Code_diplome=".$c_diplome.",Code_bibl=".$c_biblio.",NOM_Prenom='".$nom."',الاسم_النسب='".$nomar."' where Code_Fonct=".$code."");
												header('location:liste_fonctionnaire1.php'); }
											   ?>