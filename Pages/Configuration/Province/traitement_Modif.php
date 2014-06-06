<?php
include("../../../connexion/connexion1.php");
						



if (isset($_POST['modifier']))

{
	$Code=$_POST['code'];
	$nom=$_POST['nom'];
	$region=$_POST['code_region'];
	
	
	
	}
									if(isset($Code) && isset($nom) && isset($region)){
											   mysql_query("UPDATE province SET Nom_Province='".$nom."',Code_Region=".$region." WHERE Code_Province=".$Code."");
												header('location:Liste_Province1.php');}
											   ?>
