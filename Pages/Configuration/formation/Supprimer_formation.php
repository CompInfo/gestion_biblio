<?php
$c=$_GET['idee'];
//$c = $_POST['cb'];

include("../../../connexion/connexion1.php");

		$req=mysql_query("DELETE FROM `formation` WHERE `Code_Form`=".$c);
		header("Location: liste_formation.php");
	
?>