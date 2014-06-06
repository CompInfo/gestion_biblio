<?php 
echo '
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../../assets/ico/favicon.ico">

    <title>Gestion de Bibliothèque</title>

   <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles  -->
    <link href="../../../css/Style.css" rel="stylesheet">
    <link href="../../../css/css_Menu_index/style4.css" rel="stylesheet">
    <link href="../../../css/css_accordion/Style.css" rel="stylesheet">
    <link href="../../../css/css_accordion/demo1.css" rel="stylesheet">
	
	    <!-- Js Files  -->
	<script type="text/javascript" src="../../../js/modernizr.custom.29473.js"></script>


    <!-- Just for debugging purposes. Don\'t actually copy this line! -->
    <!--[if lt IE 9]><script src="../../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

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
          <a class="navbar-brand" Style=" height:100px" href="index.html"><img alt="logo" src="../../../images/logo.png" Style=" width:80px; height:70px"> Gestion Bibliotéque    </a> 
		
        </div>
		
		
		
		
        <div class="navbar-collapse collapse">
		 <ul class="nav navbar-nav navbar-right" style=" margin-top:25px; margin-right:20px">
            <li><a href="../../../index.html">Acceuil</a></li>
            <li><a href="#">Connexion</a></li>
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container-fluid" Style="margin-top:60px;">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
		<section class="ac-container" Style="margin-top:55px;">
		 		    <section class="ac-container">
				<div>
					<input id="ac-1" name="accordion-1" type="radio" checked />
					<label for="ac-1">Informations </label>
					<article class="ac-large">
					<ul>
							<li ><a href="../../../Bibliotheque/Liste_bibliotheque1.php">Liste</a></li>
							
							<li ><a href="../../../Bibliotheque/Province/Liste_Province.php">Province</a></li>
														<li ><a href="../../Bibliotheque/Province/Region/Liste_Region1.php">Region</a></li>

					</ul>
					</article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="radio" />
					<label for="ac-2">Fonctionnaire</label>
					<article class="ac-large">
						<ul>
							<li ><a href="../../Fonctionnaire/Liste_fonctionnaire1.php">Liste</a></li>
							
							<li ><a href="../../Fonctionnaire/cadre/liste_cadre.php">Cadre</a></li>
							<li ><a href="../../Fonctionnaire/diplome/liste_diplome.php">Diplome</a></li>
							<li ><a href="../../Fonctionnaire/formation/liste_formation.php">Formation</a></li>
						</ul>					
					</article>
				</div>
				<div>
					<input id="ac-3" name="accordion-1" type="radio" />
					<label for="ac-3">Center biblio</label>
					<article class="ac-large">
						<ul>
							<li ><a href="../../Centre_bibliotheque/Liste_centre1.php">Liste</a></li>
							
							<li ><a href="liste_probleme.php">Problème</a></li>
						</ul>					
					</article>
				</div>
				<div>
					<input id="ac-4" name="accordion-1" type="radio" />
					<label for="ac-4">Materiel</label>
					<article class="ac-large">
						<ul>
							<li ><a href="../../Materiel/Liste_materiel1.php">Liste</a></li>
							
						</ul>					
					</article>
				</div>
				
				<div>
					<input id="ac-5" name="accordion-1" type="radio" />
					<label for="ac-5">Responsable</label>
					<article class="ac-large">
						<ul>
							<li ><a href="../../Responsable/Liste_responsable1.php">Liste</a></li>
							
						</ul>					
					</article>
				</div>
				
				<div>
					<input id="ac-6" name="accordion-1" type="radio" />
					<label for="ac-6">Documentation</label>
					<article class="ac-large">
						<ul>
							<li ><a href="../../Documentation/Liste_documentation1.php">Liste</a></li>
							
						</ul>					
					</article>
				</div>
				
				<div>
					<input id="ac-7" name="accordion-1" type="radio" />
					<label for="ac-7">Services</label>
					<article class="ac-large">
						<ul>
							<li ><a href="../../Service/Liste_service1.php">Liste</a></li>
							
						</ul>					
					</article>
				</div>
				
				<div>
					<input id="ac-8" name="accordion-1" type="radio" />
					<label for="ac-8">Visiteur</label>
					<article class="ac-large">
						<ul>
							<li ><a href="../../Visiteur/Liste_visiteur1.php">Liste</a></li>
							
						</ul>					
					</article>
				</div>
			</section>
	
        </div> 
		 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Ajouter Un problémes : </h1>
		 <div class="row placeholders">
		 
		 <center > 
<form method="POST" action="traitement_ajouter.php">
<table>
';

							echo '
							
					<tr><td> Centre :<select name="centre">
							';
							include("../../../connexion/connexion1.php");
							$req="SELECT * FROM  `centre_bibliotheque` ";
							$res = mysql_query($req);
							while($data=mysql_fetch_array($res)){
							echo '<option value="'.$data[0].'" >'.$data['Nature_Espace'].'</option>';}
							
							


echo '</td></tr>
<tr> <td>Probléme : <input type ="text" name="probleme"></td></tr>
 <tr><td>Solution : <input type ="text" name="solution"></td></tr>

</table>
';


 echo "<tr>
<td></td><td><input class='bouton' type ='submit' value='Ajouter' name='ajouter'>
<input class='bouton' type ='submit' value='Retour' name='retour'></td> ";


 echo '
 </form>
  </center>
 </div>
</body>
</html>';


?>