<?php
$c=$_GET['idee'];
//$c = $_POST['cb'];

include("../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM `responsable` WHERE `Code_resp`=".$c);
		header("Location:Liste_responsable1.php");
		
	
?>