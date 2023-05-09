<?php
//centro
$centro="SELECT COUNT(*) as num_ordini
FROM ordine WHERE luogo_ordine = 'centro';";
$dati_centro = $mysqli->query($centro) or die ("<h3>Errore SQL 1:</h3><p>$centro</p>");
$ordine_centro = $dati_centro->fetch_array();
$numero_centro=$ordine_centro["num_ordini"];

//nord-est
$nord_est="SELECT COUNT(*) as num_ordini
FROM ordine WHERE luogo_ordine = 'nord est';";
$dati_nord_est = $mysqli->query($nord_est) or die ("<h3>Errore SQL 1:</h3><p>$nord_est</p>");
$ordine_nord_est = $dati_nord_est->fetch_array();
$numero_nord_est=$ordine_nord_est["num_ordini"];

 //nord-ovest
 $nord_ovest="SELECT COUNT(*) as num_ordini
 FROM ordine WHERE luogo_ordine = 'nord ovest';";
 $dati_nord_ovest = $mysqli->query($nord_ovest) or die ("<h3>Errore SQL 1:</h3><p>$nord_ovest</p>");
 $ordine_nord_ovest = $dati_nord_ovest->fetch_array();
 $numero_nord_ovest=$ordine_nord_ovest["num_ordini"];

 //sud-est
$sud_est="SELECT COUNT(*) as num_ordini
FROM ordine WHERE luogo_ordine = 'sud est';";
$dati_sud_est = $mysqli->query($sud_est) or die ("<h3>Errore SQL 1:</h3><p>$sud_est</p>");
$ordine_sud_est = $dati_sud_est->fetch_array();
$numero_sud_est=$ordine_sud_est["num_ordini"];

//sud-ovest
$sud_ovest="SELECT COUNT(*) as num_ordini
FROM ordine WHERE luogo_ordine = 'sud ovest';";
$dati_sud_ovest = $mysqli->query($sud_ovest) or die ("<h3>Errore SQL 1:</h3><p>$sud_ovest</p>");
$ordine_sud_ovest = $dati_sud_ovest->fetch_array();
$numero_sud_ovest=$ordine_sud_ovest["num_ordini"];
?>

