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
	 $("table.display").dataTable();
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
<a class="navbar-brand" Style=" height:100px" href="../../index.html"><img alt="logo" src="../../images/logo.png" Style=" width:80px; height:70px"> Gestion Bibliotéque    </a>          </div>
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
		
<div class="container">

<!-------->
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#Informations" data-toggle="tab">Informations</a></li>
        <li><a href="#Responsable" data-toggle="tab">Responsable</a></li>
        <li><a href="#Fonctionnaire" data-toggle="tab">Fonctionnaire</a></li>
        <li><a href="#Documentation" data-toggle="tab">Documentation</a></li>

    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="Informations">
            <h1>Informations Generales :</h1>';
    include("../../connexion/connexion1.php");
                    
                
                  $req="SELECT bibliothèque.Code_bibl,bibliothèque.Nom_Bibli,bibliothèque.Etat_Juridique,bibliothèque.Tel,bibliothèque.Faxe,bibliothèque.Email,responsable.Nom_resp,province.Nom_Province   FROM  bibliothèque, responsable,province WHERE responsable.Code_resp=bibliothèque.Code_resp  AND province.Code_Province=bibliothèque.Code_Province AND bibliothèque.Code_bibl=".$_GET["var1"]." ";
                 

                $res = mysql_query($req) or die('Erreur SQL !'.$req.'<br>'.mysql_error());



                while($row = mysql_fetch_array($res)){

                
                


       echo' <div>
<ul class="list-group" Style="margin-top:30px;margin-left:200px; text-align:left;width:200px;display:inline-block;">
  <li class="list-group-item list-group-item-info">Bibliotéque</li>
  <li class="list-group-item list-group-item-info">Etat Juridique</li>
  <li class="list-group-item list-group-item-info">Tel</li>
  <li class="list-group-item list-group-item-info">Faxe</li>
  <li class="list-group-item list-group-item-info">Email</li>
  <li class="list-group-item list-group-item-info"> Responsable</li>
  <li class="list-group-item list-group-item-info">Province</li>

</ul>
<ul class="list-group" Style=" width:300px ;display:inline-block;">
  <li class="list-group-item "><?=$row[\'Nom_Bibli\']?></li>
  <li class="list-group-item "><?=$row[\'Etat_Juridique\']?></li>
  <li class="list-group-item "><?=$row[\'Tel\']?></li>
  <li class="list-group-item "><?=$row[\'Faxe\']?></li>
  <li class="list-group-item "><?=$row[\'Email\']?></li>
  <li class="list-group-item "><?=$row[\'Nom_resp\']?></li>
  <li class="list-group-item "><?=$row[\'Nom_Province\']?></li>

</ul>
</div>
       
        </div>


        <div class="tab-pane" id="Responsable">
            <h1>Responsable</h1>';

  include("../../connexion/connexion1.php");
                $req="SELECT responsable.Code_resp,responsable.Nom_resp,responsable.Tel_resp,responsable.Adresse_resp,bibliothèque.Nom_Bibli,responsable.الاسم_النسب   FROM  responsable,bibliothèque WHERE responsable.Code_bibl=bibliothèque.Code_bibl AND bibliothèque.Code_bibl=".$_GET["var1"]." ";
                $res = mysql_query($req) or die('Erreur SQL !'.$req.'<br>'.mysql_error());
                while($row = mysql_fetch_array($res)){
                
                echo' <div>
<ul class="list-group" Style="margin-top:30px;margin-left:200px; text-align:left;width:200px;display:inline-block;">
  <li class="list-group-item list-group-item-info">Responsable</li>
  <li class="list-group-item list-group-item-info">الاسم_النسب</li>
  <li class="list-group-item list-group-item-info">Tel Responsable</li>
  <li class="list-group-item list-group-item-info">Adresse Responsable</li>
  <li class="list-group-item list-group-item-info">Bibliothèque</li>

</ul>
<ul class="list-group" Style=" width:300px ;display:inline-block;">
  <li class="list-group-item "><?=$row[\'Nom_resp\']?></li>
  <li class="list-group-item "><?=$row[\'الاسم_النسب\']?></li>
  <li class="list-group-item "><?=$row[\'Tel_resp\']?></li>
  <li class="list-group-item "><?=$row[\'Adresse_resp\']?></li>
  <li class="list-group-item "><?=$row[\'Nom_Bibli\']?></li>

</ul>
</div>';


        
                 
                }
  
            echo'</tbody>
    
        </table>

</Center>



        </div>
        <div class="tab-pane" id="Fonctionnaire">
            <h1>Fonctionnaire</h1>

<div Style="text-align:center; margin-left:300px">

    <table id="datatables" class="display" Style="width:500;">
            <thead>
            <tr>

                <th>NOM et Prenom </th>
                <th>الاسم_النسب</th>
                <th>Appartenance</th>
                <th>Cadre</th>
                <th>Niveau</th>
                <th>Formation</th>
                <th>Diplome</th>
                <th>Bibliothèque</th>

                
            </tr>
            </thead>
            <tbody>';
                  include("../../connexion/connexion1.php");
                $req="SELECT fonctionnaire.Code_Fonct,fonctionnaire.Appartenance,cadre.Echelle,niveau_scolaire.Niveau,formation.Thème,diplome.Spécialité,bibliothèque.Nom_Bibli,fonctionnaire.NOM_Prenom,fonctionnaire.الاسم_النسب   FROM  fonctionnaire,cadre,niveau_scolaire,formation,diplome,bibliothèque where fonctionnaire.code_cadre=cadre.code_cadre AND fonctionnaire.Code_Niveau=niveau_scolaire.Num_Niveau AND fonctionnaire.Code_formation=formation.Code_Form AND fonctionnaire.Code_diplome=diplome.Num_Dip AND fonctionnaire.Code_bibl=bibliothèque.Code_bibl AND bibliothèque.Code_bibl=".$_GET["var1"]." ";

                $res = mysql_query($req);

                while($row = mysql_fetch_array($res)){
                
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

                      
                </tr>
                
                
                 <?
                 
                }
                 ?>
                
                 
            <?
            echo'</tbody>
    
        </table>




</div>


        </div>
        
        <div class="tab-pane" id="Documentation">
            <h1>Documentation</h1>


<div Style="text-align:center; margin-left:300px">

        <table id="datatables" class="display" Style="width:500;">
            <thead>
            <tr>

                <th>Langue </th>
                <th>Nombre de Livre</th>
                <th>Nombre de Livre Tome</th>
                <th>Nombre de copie de Livre</th>
                <th>Nombre de titre de livre</th>
                <th>Etat</th>
                <th>Evolution</th>
                <th>Objet</th>
                <th>Bibliothèque</th>


                
            </tr>
            </thead>
            <tbody>';
                 
            include("../../connexion/connexion1.php");
                $req="SELECT documentation.Code_Doc,documentation.Langue,documentation.Nbr_Livres,documentation.Nbr_Livres_Tome,documentation.Nbr_Copie_Livre,documentation.Nbr_Livre_Titre,documentation.Etat,documentation.Evolution,documentation.Objet,bibliothèque.Nom_Bibli  FROM  documentation,bibliothèque where documentation.Code_bibl=bibliothèque.Code_bibl AND bibliothèque.Code_bibl=".$_GET["var1"] ." ";
                $res = mysql_query($req);
                while($row = mysql_fetch_array($res)){
                
                ?>
                <tr>

                  <td><?=$row['Langue']?></td>
                  <td><?=$row['Nbr_Livres']?></td>

                   <td><?=$row['Nbr_Livres_Tome']?></td>
                    <td><?=$row['Nbr_Copie_Livre']?></td>
                     <td><?=$row['Nbr_Livre_Titre']?></td>
                    <td><?=$row['Etat']?></td>
                     <td><?=$row['Evolution']?></td>
                     <td><?=$row['Objet']?></td>
                     <td><?=$row['Nom_Bibli']?></td>

                      
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





<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(\'#tabs\').tab();
    });
</script>    
</div> <!-- container -->


         </div>

          
          </div>
     

  
  </body>
</html>';

?>
