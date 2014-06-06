<?php
$c=$_GET['idee'];

include("../../connexion/connexion1.php");

		$req=mysql_query("DELETE FROM fonctionnaire WHERE Code_Fonct=".$c);
												header('location:liste_fonctionnaire1.php'); 
	
?>