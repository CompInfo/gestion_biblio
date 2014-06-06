<?php 


		echo"	
		          <h1 Style='margin:10px 10px;' class=\"page-header\">Modifier un Centre:</h1>

			<form method='POST' action='traitement_Modif.php'>
		<table class=\"table\" style='margin:10px 10px;'>
		<tr>
		<td> Code Centre : </td>
		<td><select name='code_centre'>";
		include("../../connexion/connexion1.php");
		$req="SELECT * FROM centre_bibliotheque ";
		$result=mysql_query($req);
		while($line=mysql_fetch_array($result)){
					echo'<option value="'.$line[0].'">'.$line[0].'</option> ';}
		
		echo "</td>
		</tr>

		<tr>
		<td>Nature espace: </td>
		<td><input type ='text' name='nature_espace'></td>
		</tr>

		<tr>
		<td>Code Bibliotheque:</td>
		<td><select name='code_bibliotheque'>";
		include("../../connexion/connexion1.php");
		$req="SELECT * FROM bibliothèque ";
		$result=mysql_query($req);
		while($line=mysql_fetch_array($result)){
					echo'<option value="'.$line[0].'">'.$line['Nom_Bibli'].'</option>';}
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
</form>
          ";
?>
