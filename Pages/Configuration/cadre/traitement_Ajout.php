<?php 

 include("../../../connexion/connexion1.php");
						
if(isset($_POST['ajouter'])){
											    
$c=$_POST['echelle'];
}
									if( isset($c)){
											   mysql_query("INSERT INTO cadre VALUES('','".$c."')");
												header('location:liste_cadre.php');}

 ?>