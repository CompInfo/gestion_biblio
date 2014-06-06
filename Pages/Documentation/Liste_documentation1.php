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
	<link href="../../style/jquery.dataTables.css" rel="stylesheet">
	    <!-- Js Files  -->
	<script type="text/javascript" src="../../js/modernizr.custom.29473.js"></script>


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
                            <li ><a href="../Fonctionnaire/Liste_fonctionnaire1.php">Liste des Fonctionnaires</a></li>
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
                            <li ><a href="Liste_documentation1.php">Liste des Documentations</a></li>
                            
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
          <h1 class="page-header">Liste des Documentations:</h1>

            
			<table id="datatables" class="display">
			<thead>
			<tr>
				<th >Langue</th>
				<th>Nbr de Livre</th>
				<th>Nbr de Livre Tome</th>
				<th>Nbr Copie de livre </th>
				<th >Nbr de livre titre </th>
				<th >Etat </th>
				<th >évolution</th>
				<th >Objet</th>
				<th>nom Bibliothéque</th>
				<th>Operation</th>
			</tr>
			</thead>
			<tbody>';
				include("../../connexion/connexion1.php");
				$req="SELECT * FROM  documentation";
				$res = mysql_query($req);
				while($row = mysql_fetch_array($res)){
				?>
				<tr>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>   
                <td><?php echo $row[4]; ?></td>		
				<td><?php echo $row[5]; ?></td>
				<td><?php echo $row[6]; ?></td>
				<td><?php echo $row[7]; ?></td>
				<td><?php echo $row[8]; ?></td>
				<?php
				$req1="SELECT * FROM  bibliothèque where Code_bibl=".$row[9];
				$res1 = mysql_query($req1);
				$row1 = mysql_fetch_array($res1);
				?>
				<td><?php echo $row1[1]; ?></td>
				  
				  <td>
                                <a href="ajouter_documentation.php"><span class="glyphicon glyphicon-plus"/></a>
                                <a href="Modifier_documentation.php"><span class="glyphicon glyphicon-pencil"/></a>
                   
				                <? echo '<a href="Supprimer_documentation.php?idee='.$row[0].'"><span class="glyphicon glyphicon-remove"/></a>'; ?>
				  </td>
				</tr>
				 <?php
				 }
				 ?>
				
				 
			<?php
			echo'</tbody>
	
		</table>
			
			
		
         </div>

          
          </div>
      </div>
    </div>

  
  </body>
</html>';


?>