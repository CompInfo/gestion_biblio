 <? 
 include("../../../connexion/connexion1.php");
						if(isset($_POST['retour'])){header ('location:liste_probleme.php');}
									 if(isset($_POST['ajouter'])){
											    
											    $a=$_POST['probleme'];
												$b=$_POST['solution'];
												$c=$_POST['centre'];}
									if( isset($c) && isset($b) && isset($a)){
											   mysql_query("INSERT INTO problème VALUES('','".$a."','".$b."',".$c.")");
												header ('location:liste_probleme.php');}
																?>