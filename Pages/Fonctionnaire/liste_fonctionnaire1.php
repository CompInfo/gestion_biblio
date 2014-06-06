<?php 
echo '
<html lang="en">
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
                    <label for="ac-1">Bibliothèque </label>
                    <article class="ac-large">
                    <ul>
                             <li ><a href="../Bibliotheque/Liste_bibliotheque1.php">Liste des Bibliotheques</a></li>             
                    </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="radio" />
                    <label for="ac-2">Fonctionnaire</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="Liste_fonctionnaire1.php">Liste des Fonctionnaires</a></li>
                        </ul>                   
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="radio" />
                    <label for="ac-3">Center biblio</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Centre_bibliotheque/Liste_centre1.php">Liste des Centre bibliotheque</a></li>
                           
                        </ul>                   
                    </article>
                </div>
                <div>
                    <input id="ac-4" name="accordion-1" type="radio" />
                    <label for="ac-4">Materiel</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Materiel/Liste_materiel1.php">Liste des Materiaux</a></li>
                            
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
                            <li ><a href="../Configuration/Cadre/liste_cadre.php">Cadre</a></li>
                            <li ><a href="../Configuration/Diplome/liste_diplome.php">Diplome</a></li>                            
                            <li ><a href="../Configuration/Formation/liste_formation.php">Formation</a></li>
                            <li ><a href="../Configuration/Problème/liste_probleme.php">Problème</a></li>


                            
                        </ul>                   
                    </article>
                </div>
            </section>
          
          
		  
		  
        </div>
        <div class=" page-content inset" Style="margin-left:300px;margin-right:50px;margin-top:50px;">
          <h1 class="page-header">Liste des Fonctionnaires</h1>

            <div Style="float:right;">
<a href="ajouter_un_fonctionnaire.php" type="button" class="btn btn-primary">Nouveau Fonctionnaire </a>
     <a href="" type="button" class="btn btn-primary" onClick="window.print(); return false" id="noprint">Imprimer</a>

</div>

 <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Large Modal</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

			<table id="datatables" class="display">
			<thead>
			<tr>
                <th>Nom et Prenom</th>
                <th>الاسم و النسب</th>

				<th>Appartenance</th>
				<th>Code Cadre</th>
				<th> niveau</th>
				<th> Formation</th>
				<th> Diplome</th>
				<th> Bibliotheque</th>
				<th>Operation</th>
			</tr>
			</thead>
			<tbody>';
				include("../../connexion/connexion1.php");
				$req1="SELECT Code_Fonct, Appartenance, NOM_Prenom, الاسم_النسب, Echelle, Niveau, Thème, Spécialité, Nom_Bibli
							FROM fonctionnaire, cadre, niveau_scolaire, formation, diplome, bibliothèque
							WHERE fonctionnaire.code_cadre = cadre.Code_cadre
							AND fonctionnaire.Code_Niveau = niveau_scolaire.Num_Niveau
							AND fonctionnaire.Code_formation = formation.Code_Form
							AND fonctionnaire.Code_diplome = diplome.Num_Dip
							AND fonctionnaire.Code_bibl = bibliothèque.Code_bibl
		 					";
						

				$res1 = mysql_query($req1) or die(mysql_error()) ;
				
				while($row = mysql_fetch_array($res1)or die(mysql_error()) ){
				
				?>
			<tr>
                <td><?=$row['NOM_Prenom']?></td>
                <td><?=$row['الاسم_النسب']?></td>
				<td><?=$row['Appartenance']?></td>
				<td><?=$row['Echelle']?></td>
				    <td><?=$row['Niveau']?></td>
					 <td><?=$row['Thème']?></td>
					  <td><?=$row['Spécialité']?></td>
					   <td><?=$row['Nom_Bibli']?></td>
						
                <td>
             <a href="<?php echo "Information_detaillees.php?var1=".$row['Code_Fonct']."" ?>"><span class="glyphicon glyphicon-list-alt"/></a>
                    <a href="<?php echo "Modifier_un_fonctionnaire.php?var2=".$row['Code_Fonct']."" ?>"  data-toggle="modal" data-target="#largeModal" ><span class="glyphicon glyphicon-pencil"/></a>
                    <? echo '<a href="Supprimer_un_fonctionnaire.php?idee='.$row[0].'"><span class="glyphicon glyphicon-remove"/></a>'; ?>
				</td>
		    </tr>
				 <?
				 }
			 ?>
				
				 
			<?
			echo'</tbody>
	
		</table>
			
			
		
         </div>

          
          </div>
      </div>
    </div>

  
  </body>
</html>';


?>
