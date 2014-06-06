<?php
include("../../../connexion/connexion1.php");
						
if (isset($_POST['ajouter']))
{


	$nom=$_POST['nom_province'];
	$region=$_POST['region'];
	
	

	}
									if(isset($nom) && isset($region)){
											   mysql_query("INSERT INTO province (Nom_Province,Code_Region) VALUES('".$nom."',".$region.")");
																							header('location:Liste_Province1.php');}




											   ?>
