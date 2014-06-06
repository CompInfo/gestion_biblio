<?php
  echo'
          <h1 >Modifier une bibliothèque:</h1>
			<form method="POST" action="traitement_Modif.php">
		<table class="table">';
		include("../../connexion/connexion1.php");
                    $req="SELECT * FROM   bibliothèque where bibliothèque.Code_bibl=".$_GET["var2"]."  ";
                    $res = mysql_query($req);
                    while($line=mysql_fetch_array($res)){
                    echo'
		
        <tr>
        <td><input type ="hidden" name="code" value="'.$line[0].'"></td>
        </tr>
        <tr>
		<td>Nom :</td>
		<td><input type ="text" name="nom" value="'.$line['Nom_Bibli'].'"></td>
		</tr>
		<tr>
		<td>Etat Juridique :</td>
		<td><input type ="text" name="etat_juri" value="'.$line['Etat_Juridique'].'"></td>
		</tr>
		<tr>
		<td> Tel: </td>
		<td><input type ="text" name="tel" value="'.$line['Tel'].'"></td>
		</tr>
		<tr>
		<td>Faxe :</td>
		<td><input type ="text" name="Faxe" value="'.$line['Faxe'].'"></td>
		</tr>
		<tr>
		<td>Email :  </td>
		<td><input type ="text" name="Email" value="'.$line['Email'].'"></td>
		</tr>
		';}
        echo'
		<tr>
		<td>Code Responsable: </td>
		<td><select name="code_responsable">';
					
					
					
					
					include("../../connexion/connexion1.php");
					$req="SELECT * FROM   responsable  ";
					$res = mysql_query($req);
					while($line=mysql_fetch_array($res)){
					echo'<option value="'.$line[0].'">'.$line['Nom_resp'].'</option>';}
					echo"</td>
		</tr>
		
		<tr>
		<td>Code Province: </td>
		<td><select name='code_province'>";
					
					include('../../connexion/connexion1.php');
                	$req2="SELECT * FROM  province  ";

                	$res2 = mysql_query($req2);
					while($line=mysql_fetch_array($res2)){
					echo'<option value="'.$line[0].'">'.$line['Nom_Province'].'</option>';}
					echo"</td>
		</tr>
		<tr>
				<td></td>
				<td>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                <button type='submit' value='Modifier' name='modifier' class='btn btn-primary'>Modifier</button>
                </td>
		</tr>
</table>
</form>";
?>