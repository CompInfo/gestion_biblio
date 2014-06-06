<?php

 include("../../connexion/connexion1.php");

						


if (isset($_POST['modifier']))
		{
			$code=$_POST['code'];
			$Libelle=$_POST['libelle'];
			$Qt_Utilise=$_POST['qt_utilise'];
			$Observation=$_POST['observation'];

			
			}
									if(isset($code) &&  isset($Libelle) && isset($Qt_Utilise) && isset($Observation)){
											   mysql_query("UPDATE  materiel  SET  Nom_Mat ='".$Libelle."' ,Qt_utilisée=".$Qt_Utilise." ,Observation='".$Observation."' where Code_Mat= ".$code."");
header('location:Liste_materiel1.php')	;			   }
											   ?>