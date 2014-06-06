<?php
include("../../../../connexion/connexion1.php");
						


if (isset($_POST['modifier']))
{

	$region=$_POST['nom_region'];
	
	
	
	}
									if(isset($region)){
											   mysql_query("UPDATE région SET Nom_Region='".$region."' ");
												echo '<script language="Javascript"> 
																<!--
																document.location.replace("Modifier_Region.php");
																// -->
																</script>';											   }

											   ?>
