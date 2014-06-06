<?php 



include("../../../connexion/connexion1.php");

if(isset($_POST['ajouter'])){


	$a=$_POST['specialite'];
	$b=$_POST['mention'];
	$c=$_POST['date'];
}
									if(isset($a) && isset($b) && isset($c) ){
											   mysql_query("INSERT INTO diplome  VALUES ('','".$a."','".$b."','".$c."')");
													header('location:liste_diplome.php');
												}

 ?>