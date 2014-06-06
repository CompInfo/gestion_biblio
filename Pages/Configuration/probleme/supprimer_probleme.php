<?php
$c=$_GET['idee'];
//$c = $_POST['cb'];

include("../../../connexion/connexion1.php");

		$req=mysql_query("DELETE FROM problème WHERE Num_pb=".$c);
		header("Location:liste_probleme.php");
	
?>