<? 
include("../../../connexion/connexion1.php");
if(isset($_POST['retour'])){header ('location:liste_probleme.php');}
if (isset($_POST['modifier']))
{
$num=$_POST['numpb'];
	$probleme=$_POST['probleme'];
	$solution=$_POST['solution'];
	
	
	}
									if(isset($num) &&  isset($probleme) && isset($solution) ){
											   mysql_query("UPDATE  problème SET Problème='".$probleme."', Solution='".$solution."' where Num_pb= ".$num."");
											   	header ('location:liste_probleme.php');
											   }


?>