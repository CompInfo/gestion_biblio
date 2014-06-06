<?php


        echo" <h1 Style='margin:20px 20px'>Modifier un Fonctionnaire</h1>
        			<form method='POST' action='traitement_Modif.php'>
        <table class='table' Style='margin:10px 10px'>
        
		<tr>
		<td>Nom et Prenom:</td>
		<td><input type ='text' name='nomprenom'></td>
		</tr>
		<tr>
		<td>الاسم_النسب </td>
		<td><input type ='text' name='nomar'></td>
		</tr>
		<tr>
		<td>Appartenance:</td>
		<td><input type ='text' name='appartenance'></td>
		</tr>
		<tr>
		<td> Cadre: </td>
		
			 <td><select name='code_cadre' >";

			 include("../../connexion/connexion1.php");
			  $req='select * from cadre';
			$result=mysql_query($req);
			while($line=mysql_fetch_array($result)){
			 echo' <option value="'.$line[0].'">'.$line['Echelle'].'</option>';
			 }
			 
			 
			echo" </td>
			

		 </tr>
		<tr>
		<td> Niveau:</td>
		<td><select name='code_niveau'>";
					 include("../../connexion/connexion1.php");

		$req1="SELECT * FROM niveau_scolaire ";
		$result1=mysql_query($req1);
		while($line1=mysql_fetch_array($result1)){
					echo '<option value="'.$line1[0].'">'.$line1['Niveau'].'</option>';}
		echo"</td>

		</tr>
		<tr>
		<td> Formation: </td>
		<td><select name='code_formation'>";
					 include("../../connexion/connexion1.php");

		$req2="SELECT * FROM formation ";
		$result2=mysql_query($req2);
		while($line2=mysql_fetch_array($result2)){
					echo'<option value="'.$line2[0].'">'.$line2['Thème'].'</option>';}
		
		echo"</td>
		</tr>
		<tr>
		<td> Diplome:</td>
		<td><select name='code_diplome'>";
					 include("../../connexion/connexion1.php");

		$req3="SELECT * FROM diplome ";
			$result3=mysql_query($req3);
		while($line3=mysql_fetch_array($result3)){
					echo'<option value="'.$line3[0].'">'.$line3['Spécialité'].'</option>';}
					echo"</td>
		</tr>
		<tr>
		<td> Bibliotheque:</td>
		<td><select name='code_bibliotheque'>";
					 include("../../connexion/connexion1.php");

		$req4="SELECT * FROM bibliothèque ";
			$result4=mysql_query($req4);
		while($line4=mysql_fetch_array($result4)){
					echo'<option value="'.$line4[0].'">'.$line4['Nom_Bibli'].'</option>';}
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
