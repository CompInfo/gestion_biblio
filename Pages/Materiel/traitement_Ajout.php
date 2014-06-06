<?php

 include("../../connexion/connexion1.php");

						
if (isset($_POST['ajouter']))
		{
			$Libelle=$_POST['libelle'];
			$Qt_Utilise=$_POST['qt_utilise'];
			$Observation=$_POST['observation'];
			
			}
									if(isset($Libelle) && isset($Qt_Utilise) && isset($Observation)){
											   mysql_query("INSERT INTO materiel  VALUES('','".$Libelle."',".$Qt_Utilise.",'".$Observation."')");
												header('location:Liste_materiel1.php')	;			   
											   }



											   ?>