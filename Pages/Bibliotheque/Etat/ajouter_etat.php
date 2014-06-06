<?php
include("../../../connexion/connexion1.php");
						
if (isset($_POST['ajouter']))
{
	$nom=$_POST['etat'];
	
	
	
	}
									if(isset($nom) ){
											   mysql_query("INSERT INTO etat_juridique VALUES('','".$nom."')");
											header('location:../ajouter_bibliotheque.php');}



											   ?>