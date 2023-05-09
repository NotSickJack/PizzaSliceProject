var chart3 = new CanvasJS.Chart("chartContainer3", {
backgroundColor: "#CC4343",
animationEnabled: true,
theme: "dark2",
title: {
text: "Zone Ordine",
},
axisX: {
interval: 1,
},
axisY2: {
interlacedColor: "rgba(1,77,101,.2)", // blue chiaro colore dentro colonne
gridColor: "white", //colonne
},
data: [
{
type: "bar",
name: "companies",
axisYType: "primary",
color: "rgb(255, 128, 0)",
dataPoints: [
{ y: <?php echo $numero_sud_ovest; ?>, label: "sud-ovest",color:"#bb3e00" },
{ y: <?php echo $numero_sud_est; ?>, label: "sud-est",color:"#4e0707" },
{ y: <?php echo $numero_nord_ovest; ?>, label: "nord-ovest",color:"#632714" },
{ y: <?php echo $numero_nord_est; ?>, label: "nord-est",color:"#EBA10F" },
{ y: <?php echo $numero_centro; ?>, label: "centro",color:"#BB3E00" },
],
},
],
});