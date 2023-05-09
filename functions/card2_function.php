var chart2 = new CanvasJS.Chart("chartContainer2", {
backgroundColor: "#CC4343",
animationEnabled: true,
theme: "dark2",
title: {
text: "Servizi",
horizontalAlign: "center",
},
data:
[
{
type: "doughnut",
startAngle: 60,
//innerRadius: 60,
indexLabelFontSize: 17,
indexLabel: "{label} - #percent%",
toolTipContent: "<b>{label}:</b> {y} (#percent%)",
dataPoints: [
{ y: <?php echo  $fisic_numero_ordini; ?>, label: "Fisico",color:"red" },
{ y: <?php echo $del_numero_ordini; ?>, label: "Deliveroo" },
{ y: <?php echo $just_eat_numero_ordini; ?>, label: "Just Eat" },
{ y: <?php echo $glovo_numero_ordini; ?>, label: "Glovo" },
],
},
],
});