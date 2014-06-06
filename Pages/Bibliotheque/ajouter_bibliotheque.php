<?php 
echo '
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Gestion de Bibliothèque</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles  -->
    <link href="../../css/Style.css" rel="stylesheet">
    <link href="../../css/css_Menu_index/style4.css" rel="stylesheet">
    <link href="../../css/css_accordion/Style.css" rel="stylesheet">
    <link href="../../css/css_accordion/demo1.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/keyboard.css">
	    <!-- Js Files  -->
    <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../../js/keyboard.js" charset="UTF-8"></script>
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
<a class="navbar-brand" Style=" height:100px" href="../../index.html"><img alt="logo" src="../../images/logo.png" Style=" width:80px; height:70px"> Gestion Bibliotéque    </a>            </div>
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
                    <label for="ac-1">Informations </label>
                    <article class="ac-large">
                    <ul>
                             <li ><a href="Liste_bibliotheque1.php">Liste</a></li>
                            
                            <li ><a href="Province/Liste_Province1.php">Province</a></li>
                            <li ><a href="Province/Region/Liste_Region1.php">Région</a></li>
                                     
                                         </ul>
                                          </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="radio" />
                    <label for="ac-2">Fonctionnaire</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Fonctionnaire/Liste_fonctionnaire1.php">Liste</a></li>
                            <li ><a href="../Fonctionnaire/cadre/liste_cadre.php">Cadre</a></li>
                            <li ><a href="../Fonctionnaire/diplome/liste_diplome.php">Diplome</a></li>
                            <li ><a href="../Fonctionnaire/formation/liste_formation.php">Formation</a></li>

                                                   </ul>                   
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="radio" />
                    <label for="ac-3">Center biblio</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Centre_bibliotheque/Liste_centre1.php">Liste</a></li>
                           
                            <li ><a href="../Centre_bibliotheque/probleme/liste_probleme.php">Problème</a></li>
                        </ul>                   
                    </article>
                </div>
                <div>
                    <input id="ac-4" name="accordion-1" type="radio" />
                    <label for="ac-4">Materiel</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Materiel/Liste_materiel1.php">Liste</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-5" name="accordion-1" type="radio" />
                    <label for="ac-5">Responsable</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Responsable/Liste_responsable1.php">Liste</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-6" name="accordion-1" type="radio" />
                    <label for="ac-6">Documentation</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Documentation/Liste_documentation1.php">Liste</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-7" name="accordion-1" type="radio" />
                    <label for="ac-7">Services</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Service/Liste_service1.php">Liste</a></li>
                            
                        </ul>                   
                    </article>
                </div>
                
                <div>
                    <input id="ac-8" name="accordion-1" type="radio" />
                    <label for="ac-8">Visiteur</label>
                    <article class="ac-large">
                        <ul>
                            <li ><a href="../Visiteur/Liste_visiteur1.php">Liste</a></li>
                            
                        </ul>                   
                    </article>
                </div>
            </section>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Ajouter une Bibliotéque</h1>

          <div class="row placeholders">';
            
		echo"

			<form method='POST' action='traitement_Ajout.php'>
		<table>
		
		<tr>
		<td>Nom :</td>
		<td><input type ='text' name='nom'></td>
		</tr>
        <tr>
        <td>مكتبة :</td>
        <td><input type ='text' name='nom_arabe' class='keyboardInput' lang='ar'></td>
        </tr>
		<tr>
		<td>Etat Juridique :</td>
		<td><select name='etat_juri'>";
					
					
					include("../../connexion/connexion1.php");
					$req="SELECT * FROM  etat_juridique ";
					$res = mysql_query($req);
					while($line=mysql_fetch_array($res)){
					echo'<option value="'.$line['Etat'].'">'.$line['Etat'].'</option>';}
					echo"</td>
		
		
		
		<td><a href='#etat' data-toggle='modal'><span class='glyphicon glyphicon-plus'/></a></td>
		</tr>
		<tr>
		<td> Tel: </td>
		<td><input type ='text' name='tel'></td>
		</tr>
		<tr>
		<td>Faxe :</td>
		<td><input type ='text' name='Faxe'></td>
		</tr>
		<tr>
		<td>Email :  </td>
		<td><input type ='text' name='Email'></td>
		</tr>
		
		<tr>
		<td>Code Responsable: </td>
		<td><select name='code_responsable'>";
					
					
					include("../../connexion/connexion1.php");
					$req="SELECT * FROM  responsable ";
					$res = mysql_query($req);
					while($line=mysql_fetch_array($res)){
					echo'<option value="'.$line[0].'">'.$line['Nom_resp'].'</option>';}
					echo"</td>
		</tr>
		
		<tr>
		<td>Code Province: </td>
		<td><select name='code_province'>";
					
					
					include('../../connexion/connexion1.php');
                	$req2="SELECT * FROM province ";

                	$res2 = mysql_query($req2);
					while($line=mysql_fetch_array($res2)){
					echo'<option value="'.$line[0].'">'.$line['Nom_Province'].'</option>';}
					echo"</td>
		</tr>
		<tr>
				<td></td>
				<td><input class='btn btn-primary btn-lg' type ='submit' value='Ajouter' name='ajouter'></td>
		</tr>
</table>
</form>
          </div>

          
          </div>
      </div>
    </div>
<div class='modal fade' id='etat' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
			<h4>Ajouter un Etat Juridique </h4>
			</div>
		  <div class='modal-body'>
		  <form method='post' action='Etat/ajouter_etat.php'>
		
		<p>Nouveau Etat-juridique : </p><input type='text' name='etat'>
		  </div>
		  <div class='modal-footer'>
		<input type='submit' class='btn btn-primary btn' value='Ajouter' name='ajouter'>
		<a class='btn btn-default' data-dismiss='modal'>Annuler</a>
		</form>
		
		  </div>
		</div>
		</form>
	</div>
</div>
   <script type='text/javascript' src='../../js/jquery-1.8.1.min.js'></script>
 <script type='text/javascript' src='../../js/bootstrap.js'></script>
  </body>
</html>";


?>