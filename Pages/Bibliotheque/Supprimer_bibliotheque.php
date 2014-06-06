<?php
$c=isset($_GET['idee'])?$_GET['idee']:null;

include("../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM `bibliothèque` WHERE `Code_bibl`=".$c);
		header("Location: liste_bibliotheque1.php");
	
?>