<?php
$pizza_uscite = "SELECT p.immagine, p.nome_pizza, p.prezzo, COUNT(o.id_ordine) AS num_ordini, SUM(p.prezzo) AS guadagno_totale FROM ordine o JOIN pizze p ON o.id_pizza = p.id_pizza GROUP BY p.id_pizza ORDER BY num_ordini DESC;
  ";
$pizza_usc = $mysqli->query($pizza_uscite) or die("<h3>Errore SQL 1:</h3><p>$pizza_uscite</p>");
for ($i = 0; $i < 3 && $pizza = $pizza_usc->fetch_array(); $i++) {
    // while($pizza=$pizza_usc->fetch_array()){ 

    $immagine_pizza = $pizza["immagine"];
    $nome_pizza = $pizza["nome_pizza"];
    $prezzo_pizza = $pizza["prezzo"];
    $ordini_pizza = $pizza["num_ordini"];
    $guadagno_pizza = $pizza["guadagno_totale"];
?>
<div class="minicard flex flex-col" data-aos="flip-down">
    <div class="center">
        <h3><?php echo $nome_pizza; ?></h3>
        <img src="assets/img/<?php echo $immagine_pizza; ?>" alt="" height="150px" width="auto" />
    </div>
    <div class="bottom flex flex-row jc-space-around" data-aos="flip-up">
        <div class="left-info">
            <h4>Ordini</h4>
            <p><?php echo $ordini_pizza; ?></p>
        </div>
        <div class="right-info">
            <h4>Incasso</h4>
            <p><?php echo $guadagno_pizza; ?></p>
        </div>
    </div>
</div>
<?php
}
?>