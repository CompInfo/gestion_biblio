<?php
$l=$_GET["l"];
if (isset($l))
{
  echo '


  <table  width="100%" class="display" id="datatables" cellspacing="0">
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
                  $req="SELECT bibliothèque.Code_bibl,bibliothèque.Nom_Bibli,bibliothèque.Nom_bibl_arab,bibliothèque.Etat_Juridique,bibliothèque.Tel,bibliothèque.Faxe,bibliothèque.Email,responsable.Nom_resp,province.Nom_Province   FROM  bibliothèque, responsable,province WHERE responsable.Code_resp=bibliothèque.Code_resp  AND province.Code_Province=bibliothèque.Code_Province AND province.Code_Province=".$l." ";

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
    
        </table>';

}   
unset ($a); 
if ($l=0)
  echo '<table  width="100%" class="display" id="datatables" cellspacing="0">
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
    
        </table>';  
?>
