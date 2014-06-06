<?php 



include("../../../connexion/connexion1.php");

							
if (isset($_POST['modifier'])){

	$Code=$_POST['code'];
	$specialite=$_POST['specialite'];
	$mention=$_POST['mention'];
	$Date=$_POST['date'];
	
	
	}
									if(isset($Code) &&  isset($specialite) &&  isset($mention) && isset($Date)){
											   mysql_query("UPDATE  diplome SET Spécialité='".$specialite."',Mension='".$mention."',Date_Sortie='".$Date."' where Num_Dip= ".$Code."");
											   header('location:liste_diplome.php');
											   }
 ?>