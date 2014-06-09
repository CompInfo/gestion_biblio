<?php

header("Content-Type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<list>";

$Code_Region = (isset($_POST["Code_Region"])) ? htmlentities($_POST["Code_Region"]) : NULL;

if ($Code_Region) {
	include('../../connexion/connexion1.php');
	
	$query = mysql_query("SELECT * FROM province WHERE Code_Region=" . mysql_real_escape_string($Code_Region). " ORDER BY Nom_Province ");
	while ($back = mysql_fetch_assoc($query)) {
		echo "<item id=\"" . $back["Code_Province"] . "\" name=\"" . $back["Nom_Province"] . "\" />";
	}
}

echo "</list>";

?>
