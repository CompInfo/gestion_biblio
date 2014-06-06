<?php
$c=$_GET['idee'];


include("../../connexion/connexion1.php");

		$req=mysql_query("DELETE FROM documentation WHERE Code_Doc=".$c);
		if(!$req)
echo mysql_error();
else
	header("Location: liste_documentation1.php");
		
	
?>