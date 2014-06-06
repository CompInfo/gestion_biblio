<?php
include("../../../../connexion/connexion1.php");
						
if (isset($_POST['ajouter']))
{

	$region=$_POST['nom_region'];
	
	
	
	}
									if(isset($region)) {
											   mysql_query("INSERT INTO région VALUES('','".$region."')");
												echo '<script language="Javascript"> 
																<!--
																document.location.replace("Ajouter_Region.php");
																// -->
																</script>';											   }



											   ?>
