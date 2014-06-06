<?php
include("../../connexion/connexion1.php");
						



if (isset($_POST['modifier']))
{
	$Code=$_POST['code'];
	$nom=$_POST['nom'];
	$etat_juri=$_POST['etat_juri'];
	$tel=$_POST['tel'];
	$Faxe=$_POST['Faxe'];
	$Email=$_POST['Email'];
	$code_responsable=$_POST['code_responsable'];
	$code_province=$_POST['code_province'];
	
	
	}
									if(isset($Code) &&  isset($nom) && isset($etat_juri) && isset($tel) && isset($Faxe) && isset($Email) && isset($code_responsable) && isset($code_province)){
											   mysql_query("UPDATE  bibliothèque SET Nom_Bibli ='".$nom."',Etat_Juridique='".$etat_juri."',Tel =".$tel.",Faxe =".$Faxe.",Email ='".$Email."',Code_resp=".$code_responsable.",code_Province =".$code_province." where Code_bibl=".$Code."");
											   												header('location:Liste_bibliotheque1.php');}

											   

											   ?>
