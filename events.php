<?php
include ('spoj.php');
mysql_query("SET NAMES 'utf8'");
$sql_upit="SELECT subject, module, room, building, professor, start_time, end_time, date, color, text FROM schedule";
$resultat = $bdd->query($sql_upit) or die(print_r($bdd->errorInfo()));
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
?>