<?php
    // DELIVEROO
    $deliveroo= "SELECT COUNT(*) AS num_ordini FROM ordine WHERE tipo_servizio = 'Deliveroo';";
    $dati_deliveroo = $mysqli->query($deliveroo) or die ("<h3>Errore SQL 1:</h3><p>$deliveroo</p>");
    $del = $dati_deliveroo->fetch_array();
    $del_numero_ordini=$del["num_ordini"];

    //JUST EAT
    $just_eat="SELECT COUNT(*) AS num_ordini FROM ordine WHERE tipo_servizio = 'Just Eat';";
    $dati_just_eat = $mysqli->query($just_eat) or die ("<h3>Errore SQL 1:</h3><p>$just_eat</p>");
    $je = $dati_just_eat->fetch_array();
    $just_eat_numero_ordini=$je["num_ordini"];

    //FISICO
    $fisico="SELECT COUNT(*) AS num_ordini FROM ordine WHERE tipo_servizio = 'Fisico';";
    $dati_fisico = $mysqli->query($fisico) or die ("<h3>Errore SQL 1:</h3><p>$fisico</p>");
    $fisic = $dati_fisico->fetch_array();
    $fisic_numero_ordini=$fisic["num_ordini"];
    
    //GLOVO
    $glovo="SELECT COUNT(*) AS num_ordini FROM ordine WHERE tipo_servizio = 'Glovo';";
    $dati_glovo = $mysqli->query($glovo) or die ("<h3>Errore SQL 1:</h3><p>$glovo</p>");
    $glov = $dati_glovo->fetch_array();
    $glovo_numero_ordini=$glov["num_ordini"];
?>