<?php 

include("../../../connexion/connexion1.php");

if (isset($_POST['modifier']))
{
	$Code=$_POST['code'];
	$echelle=$_POST['echelle'];
	
	
	}
									if(isset($Code) &&  isset($echelle) ){
											   mysql_query("UPDATE  cadre SET Echelle='".$echelle."' where Code_Cadre= ".$Code."");
											   	header('location:liste_cadre.php');
											   }
 ?>