<?php
//farina
  $farina="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata FROM ingredienti JOIN ricetta ON ingredienti.id_ingrediente = ricetta.id_ingrediente WHERE ingredienti.nome_ingrediente = 'farina';";
  $dati_farina = $mysqli->query($farina) or die ("<h3>Errore SQL 1:</h3><p>$farina</p>");
  $quantita_farina = $dati_farina->fetch_array();
  $numero_farina=$quantita_farina["quantita_utilizzata"];
  //polpa
  $polpa="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'polpa');
  ";
  $dati_polpa = $mysqli->query($polpa) or die ("<h3>Errore SQL 1:</h3><p>$polpa</p>");
  $quantita_polpa = $dati_polpa->fetch_array();
  $numero_polpa=$quantita_polpa["quantita_utilizzata"];
  //lievito
  $lievito="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'lievito');
  ";
  $dati_lievito = $mysqli->query($lievito) or die ("<h3>Errore SQL 1:</h3><p>$lievito</p>");
  $quantita_lievito = $dati_lievito->fetch_array();
  $numero_lievito=$quantita_lievito["quantita_utilizzata"];
  //prosciutto
  $prosciutto="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'prosciutto');
     ";
  $dati_prosciutto = $mysqli->query($prosciutto) or die ("<h3>Errore SQL 1:</h3><p>$prosciutto</p>");
  $quantita_prosciutto = $dati_prosciutto->fetch_array();
  $numero_prosciutto=$quantita_prosciutto["quantita_utilizzata"];
  //tonno
  $tonno="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'tonno');
  ";
  $dati_tonno = $mysqli->query($tonno) or die ("<h3>Errore SQL 1:</h3><p>$tonno</p>");
  $quantita_tonno = $dati_tonno->fetch_array();
  $numero_tonno=$quantita_tonno["quantita_utilizzata"];

  //funghi
  $funghi="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'funghi');
  ";
  $dati_funghi = $mysqli->query($funghi) or die ("<h3>Errore SQL 1:</h3><p>$funghi</p>");
  $quantita_funghi = $dati_funghi->fetch_array();
  $numero_funghi=$quantita_funghi["quantita_utilizzata"];
  //melanzane
  $melanzane="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'melanzane');
  ";
  $dati_melanzane = $mysqli->query($melanzane) or die ("<h3>Errore SQL 1:</h3><p>$melanzane</p>");
  $quantita_melanzane = $dati_melanzane->fetch_array();
  $numero_melanzane=$quantita_melanzane["quantita_utilizzata"];
  //mozzarella
  $mozzarella="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'mozzarella');
  ";
  $dati_mozzarella = $mysqli->query($mozzarella) or die ("<h3>Errore SQL 1:</h3><p>$mozzarella</p>");
  $quantita_mozzarella = $dati_mozzarella->fetch_array();
  $numero_mozzarella=$quantita_mozzarella["quantita_utilizzata"];
  //origano
  $origano="SELECT COALESCE(SUM(quantita), 0) AS quantita_utilizzata
  FROM ricetta
  WHERE id_ingrediente = (SELECT id_ingrediente FROM ingredienti WHERE nome_ingrediente = 'origano');
  ";
  $dati_origano = $mysqli->query($origano) or die ("<h3>Errore SQL 1:</h3><p>$origano</p>");
  $quantita_origano = $dati_origano->fetch_array();
  $numero_origano=$quantita_origano["quantita_utilizzata"];

?>