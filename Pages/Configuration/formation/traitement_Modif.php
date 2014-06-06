<?php

include("../../../connexion/connexion1.php");

if (isset($_POST['modifier']))
{
	$code=$_POST['code'];
	$theme=$_POST['theme'];
	
	}
	
									if(isset($code) &&  isset($theme) ){
											   mysql_query("UPDATE  formation SET Thème ='".$theme."' where Code_Form= ".$code." ");
											  header('location:liste_formation.php');
											   }

?>