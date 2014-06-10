<?php 
echo '
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<script src="../../js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../../js/jquery.dataTables.js" type="text/javascript"></script>
	<style type="text/css">
		@import "../../css/jquery.dataTables.css";
	</style>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
	$(\'#datatables\').dataTable();
	})
	
	</script>



	
    <title>Gestion de Bibliothèque</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles  -->
    <link href="../../css/Style.css" rel="stylesheet">
    <link href="../../css/css_Menu_index/style4.css" rel="stylesheet">
    <link href="../../css/css_accordion/Style.css" rel="stylesheet">
    <link href="../../css/css_accordion/demo1.css" rel="stylesheet">
	
	    <!-- Js Files  -->
	<script type="text/javascript" src="../../js/modernizr.custom.29473.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/keyboard.js" charset="UTF-8"></script>
<script>
$(\'#openBtn\').click(function(){
	$(\'#myModal\').modal({show:true})
});</script>

    <!-- Just for debugging purposes. Don\'t actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" Style=" height:100px" href="../../index.html"><img alt="logo" src="../../images/logo.png" Style=" width:80px; height:70px"> Gestion Bibliotéque    </a>    
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" style=" margin-top:25px; margin-right:20px">
            <li><a href="../../index.html">Acceuil</a></li>
            <li><a href="#">Connexion</a></li>
            
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container-fluid" Style="margin-top:60px;">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
             <section class="ac-container">
                <div>
                    <input id="ac-1" name="accordion-1" type="radio" checked />
                    <label for="ac-1">Bibliotéque </label>
                    <article class="ac-large">
                    <ul>
                             <li ><a href="Liste_bibliotheque1.php">Liste des Bibliotéques</a></li>
                            
                          
                                     
                                         </ul>
                                          </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="radio" />
                    <label for="ac-2">Fonctionnaire</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Fonctionnaire/Liste_fonctionnaire1.php">Liste des Fonctionnaires</a></li>
                           
                        </ul>                   
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="radio" />
                    <label for="ac-3">Centre biblio</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Centre_bibliotheque/Liste_centre1.php">Liste des Centres</a></li>
                           
                        </ul>                   
                    </article>
                </div>
                <div>
                    <input id="ac-4" name="accordion-1" type="radio" />
                    <label for="ac-4">Materiel</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Materiel/Liste_materiel1.php">Liste des Materiels</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-5" name="accordion-1" type="radio" />
                    <label for="ac-5">Responsable</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Responsable/Liste_responsable1.php">Liste des Responsables</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-6" name="accordion-1" type="radio" />
                    <label for="ac-6">Documentation</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Documentation/Liste_documentation1.php">Liste des Documentations</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-7" name="accordion-1" type="radio" />
                    <label for="ac-7">Services</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Service/Liste_service1.php">Liste des Services</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-8" name="accordion-1" type="radio" />
                    <label for="ac-8">Visiteur</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Visiteur/Liste_visiteur1.php">Liste des Visiteurs</a></li>
                            
                        </ul>                   
                    </article>
                </div>

                <div>
                    <input id="ac-9" name="accordion-1" type="radio" />
                    <label for="ac-9">Configuration</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Configuration/Province/Liste_Province1.php">Province</a></li>
                            <li ><a href="../Configuration/Region/Liste_Region1.php">Region</a></li>
                            <li ><a href="..Region//Configuration/Cadre/liste_cadre.php">Cadre</a></li>
                            <li ><a href="../Configuration/Diplome/liste_diplome.php">Diplome</a></li>                            
                            <li ><a href="../Configuration/Formation/liste_formation.php">Formation</a></li>
                            <li ><a href="../Configuration/Problème/liste_probleme.php">Problème</a></li>


                            
                        </ul>                   
                    </article>
                </div>
            </section>
  
        </div>
        <div class=" page-content inset" Style="margin-left:300px;margin-right:50px;margin-top:50px;">
          <h1 class="page-header">Liste des Bibliotéques :</h1>



<div Style="float:right;">
<a data-toggle="modal" href="#myModal" class="btn btn-primary">Nouvelle bibliotheque</a>
 <a href="" type="button" class="btn btn-primary" onClick="window.print(); return false" id="noprint">Imprimer</a>

</div>
       

<div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Ajouter Bibliotheque :</h4>
        </div><div class="container"></div>
        <div class="modal-body">
         <form method="POST" action="traitement_Ajout.php">
		<table class="table">
		
		<tr>
		<td>Nom :</td>
		<td><input type ="text" name="nom"></td>
		</tr>
        <tr>
        <td>مكتبة :</td>
        <td><input type ="text" name="nom_arabe" class="keyboardInput" lang="ar"></td>
        </tr>
		<tr>
		<td>Etat Juridique :</td>
		<td><select name="etat_juri"> ';
		
		
		include("../../connexion/connexion1.php");
					$req="SELECT * FROM  etat_juridique ";
					$res = mysql_query($req);
					while($line=mysql_fetch_array($res)){
					echo'<option value="'.$line['Etat'].'">'.$line['Etat'].'</option>';}
		
		
		
		echo' <td><a data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-plus"/></a></td>
		<tr>
		<td> Tel: </td>
		<td><input type ="text" name="tel"></td>
		</tr>
		<tr>
		<td>Faxe :</td>
		<td><input type ="text" name="Faxe"></td>
		</tr>
		<tr>
		<td>Email :  </td>
		<td><input type ="text" name="Email"></td>
		</tr>
		
		<tr>
		<td>Code Responsable: </td>
		<td><select name="code_responsable">';
		
		 include("../../connexion/connexion1.php");
					$req="SELECT * FROM  responsable ";
					$res = mysql_query($req);
					while($line=mysql_fetch_array($res)){
					echo'<option value="'.$line[0].'">'.$line['Nom_resp'].'</option>';}
		echo '</td>
		</tr>
		<tr>
		<td>Code Province: </td>
		<td><select name="code_province">';
		
					include('../../connexion/connexion1.php');
                	$req2="SELECT * FROM province ";

                	$res2 = mysql_query($req2);
					while($line=mysql_fetch_array($res2)){
					echo'<option value="'.$line[0].'">'.$line['Nom_Province'].'</option>';}
		echo '</td>
		</tr>
		
		
		</table>
		</form>
          <br>
          <br>
          <br>
          <br>
          <br>
          
        </div>
        <div class="modal-footer">
         
		 <input class="btn btn-primary " type ="submit" value="Ajouter" name="ajouter">
          <a href="#" class="btn btn-primary" data-dismiss="modal">Annuler</a>
        </div>
      </div>
    </div>
</div>
<div class="modal" id="myModal2" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          
<!--  ======================================etat juridique======================================================  -->
		  
		  <h4 class="modal-title">Ajouter un Etat Juridique :</h4>
        </div><div class="container"></div>
        <div class="modal-body">
		<form method="POST" action="Etat/ajouter_etat.php">
          <p>Nouveau Etat-juridique : </p><input type="text" name="etat">
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Fermer</a>
         <input class="btn btn-primary btn-lg" type ="submit" value="Ajouter" name="ajouter">
		 
		  </form>
        </div>
      </div>
    </div>
</div>




         <center><table  width="100%" class="display" id="datatables" cellspacing="0">
			<thead>
			<tr>

				<th>Bibliotéque </th>
                <th>مكتبة </th>
				<th>Tel</th>
				<th>Faxe</th>
				<th>Email</th>
				<th>Responsable</th>
				<th>Opération</th>
			</tr>
			</thead>
             
        </tfoot>

			<tbody>';
				include("../../connexion/connexion1.php");
			      $req="SELECT bibliothèque.Code_bibl,bibliothèque.Nom_Bibli,bibliothèque.Nom_bibl_arab,bibliothèque.Etat_Juridique,bibliothèque.Tel,bibliothèque.Faxe,bibliothèque.Email,responsable.Nom_resp,province.Nom_Province   FROM  bibliothèque, responsable,province WHERE responsable.Code_resp=bibliothèque.Code_resp  AND province.Code_Province=bibliothèque.Code_Province ";

				$res = mysql_query($req);

				while($row = mysql_fetch_array($res)){

				?>
				<tr>

				  <td><?=$row['Nom_Bibli']?></td>
                 <td><?=$row['Nom_bibl_arab']?></td>

				    <td><?=$row['Tel']?></td>
					 <td><?=$row['Faxe']?></td>
					  <td><?=$row['Email']?></td>
                      
					   <td><?= $row['Nom_resp']?></td>
						<td >

                                <a href="<?php echo "Information_detaillees.php?var1=".$row['Code_bibl']."" ?>"><span class="glyphicon glyphicon-list-alt"/></a>
            <a href="<?php echo "Modifier_bibliotheque.php?var2=".$row['Code_bibl']."" ?>"  data-toggle="modal" data-target="#largeModal" ><span class="glyphicon glyphicon-pencil"/></a>
                        
				                <? echo '<a href="Supprimer_bibliotheque.php?idee='.$row['Code_bibl'].'"><span class="glyphicon glyphicon-remove"/></a>'; ?>

                               
                        </td>

				</tr>
				
				
				 <?
				 
                }
				 ?>
				
				 
			<?
			echo'</tbody>
	
		</table>
			</center>
			</form>
		
         </div>

          
          </div>
    </div>


  </body>
</html>';


?>
