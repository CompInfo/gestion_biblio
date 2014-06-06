<?php
$c=$_GET['idee'];

include("../../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM `province` WHERE Code_Province=".$c);
		header("Location: Liste_Province1.php");
		
	
?>