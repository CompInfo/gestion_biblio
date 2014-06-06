<?php

 include("../../connexion/connexion1.php");

if (isset($_POST['retour'])){header ('location:liste_centre1.php');}
if (isset($_POST['ajouter']))
		{
			
			$Nature=$_POST['nature_espace'];
			$c_biblio=$_POST['code_bibliotheque'];
			
			
			}
									if( isset($Nature) && isset($c_biblio)){
											  $res=mysql_query("INSERT INTO centre_bibliotheque VALUES('','".$Nature."',".$c_biblio.")");
											 if(!$res){
											 echo $c_biblio;
											 echo mysql_error();}
											 else
											 header('location:Liste_centre1.php');
											   }





											   ?>