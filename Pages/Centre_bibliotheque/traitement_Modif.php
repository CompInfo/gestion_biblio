<?php

 include("../../connexion/connexion1.php");

						if (isset($_POST['retour'])){header ('location:liste_centre1.php');}




if (isset($_POST['modifier']))
		{
			$code=$_POST['code_centre'];
			$Nature=$_POST['nature_espace'];
			$c_biblio=$_POST['code_bibliotheque'];
			
			echo $code,$Nature,$c_biblio;
			}
									if(isset($code) &&  isset($Nature) && isset($c_biblio)){
											  $res= mysql_query("UPDATE  centre_bibliotheque SET Nature_Espace='".$Nature."',Code_Bibl=".$c_biblio." WHERE Code_Centre=".$code."");
											 		 if(!$res){
											 echo $c_biblio;
											 echo mysql_error();}
											 else
											 		 header('location:Liste_centre1.php');}

											   ?>