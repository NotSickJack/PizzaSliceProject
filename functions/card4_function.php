var chart4= new CanvasJS.Chart("chartContainer4", {
backgroundColor: "#CC4343",
animationEnabled: true,
theme: "dark2", // "light1", "light2", "dark1", "dark2"
title: {
text: "Ingredienti",
},
axisY: {
title: "Quantità in kg ",
},
data: [
{
type: "column",
showInLegend: true,
legendMarkerColor: "trasparent",
legendText: " ",
dataPoints: [
<?php
while ($info = $data_ingrendienti->fetch_array()) {
  $nome = $info['nome_ingrediente'];
  $quantita = $info['quantita_totale'];
  $colore = $info['colore'];
  echo "{ y: $quantita, label: '$nome', color: '$colore' },";
}
?>
],
},
],
});