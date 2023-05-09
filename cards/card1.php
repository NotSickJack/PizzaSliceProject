<?php
  $result_uscite="SELECT date, SUM(quantita_totale * prezzo_unitario) AS uscite FROM ingredienti GROUP BY date;";
  $result_usc = $mysqli->query($result_uscite) or die ("<h3>Errore SQL 1:</h3><p>$result_uscite</p>");  
  
  $result_entrate="SELECT DATE(data_ordine) AS data, SUM(prezzo) AS somma_prezzo FROM ordine GROUP BY DATE(data_ordine) ORDER BY DATE(data_ordine) ASC";
  $result_ent = $mysqli->query($result_entrate) or die ("<h3>Errore SQL 1:</h3><p>$result_entrate</p>");
?>

