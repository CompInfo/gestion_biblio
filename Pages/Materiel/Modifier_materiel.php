<?php 

            
		echo"	

                  <h2 Style=\"margin:10px 10px;\" class=\"page-header\">Modifier un Materiel:</h2>

			<form method='POST' action='traitement_Modif.php'>
		<table class=\"table\" Style=\"margin:10px 10px;\">
		
		<tr>
		<td> Code Materiel : </td>
		
			 <td><select name='code' >";

			 include("../../connexion/connexion1.php");
			  $req='SELECT * FROM materiel ';
			$result=mysql_query($req);
			while($line=mysql_fetch_array($result)){
			 echo' <option value="'.$line[0].'">'.$line['Code_Mat'].'</option>';
			 }
			 
			 
			echo" </td>
			

		 </tr>

		<tr>
				<td>Libelle : </td>
				<td><input type ='text' name='libelle'></td>
		</tr>
		<tr>
				<td>Qt Utilise  :</td>
				<td><input type ='text' name='qt_utilise'></td>
		</tr>
		<tr>
				<td>Observation  :</td>
				<td><input type ='text' name='observation'></td>
		</tr>
		<tr>
				<td></td>
<td>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                <button type='submit' value='Modifier' name='modifier' class='btn btn-primary'>Modifier</button>
                </td>		</tr>
</table>
</form>
    ";
?>
