<?php

include("../../connexion/connexion1.php");
						
if (isset($_POST['ajouter']))
		{
			$Appart=$_POST['appartenance'];
			$c_cadre=$_POST['code_cadre'];
			$c_niveau=$_POST['code_niveau'];
			$c_formation=$_POST['code_formation'];
			$c_diplome=$_POST['code_diplome'];
			$c_biblio=$_POST['code_bibliotheque'];
			$nom=$_POST['nomprenom'];
			$nomar=$_POST['nomar'];
			
			}
											if(isset($Appart) && isset($c_cadre) && isset($c_niveau) && isset($c_formation) && isset($c_diplome) && isset($c_biblio) && isset($nom) && isset($nomar)){
											   mysql_query("INSERT INTO fonctionnaire VALUES('','".$Appart."',".$c_cadre.",".$c_niveau.",".$c_formation.",".$c_diplome.",".$c_biblio.",'".$nom."','".$nomar."')");
											        
												header('location:liste_fonctionnaire1.php'); }
											   




											   ?>