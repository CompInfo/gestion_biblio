<?php
 include("../../../connexion/connexion1.php");
	
if(isset($_POST['ajouter'])){
											    
 $c=$_POST['theme'];
}
									if( isset($c)){
											   mysql_query("INSERT INTO formation VALUES('','".$c."')");
											   header('location:liste_formation.php');}



?>