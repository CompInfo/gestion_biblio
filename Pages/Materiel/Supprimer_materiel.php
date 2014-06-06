<?php
$c=$_GET['idee'];

include("../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM materiel WHERE Code_Mat=".$c);
header('location:Liste_materiel1.php')	;			   
		
	
?>