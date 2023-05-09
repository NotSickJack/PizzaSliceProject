var chart4= new CanvasJS.Chart("chartContainer4", {
    backgroundColor: "#CC4343",
    animationEnabled: true,
    theme: "dark2", // "light1", "light2", "dark1", "dark2"
    title: {
      text: "Ingridienti",
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
              { y: <?php echo $numero_farina;?>, label: "Farina",color:"red" },
              { y: <?php echo $numero_polpa;?>, label: "Polpa" },
              { y: <?php echo $numero_lievito;?>, label: "Lievito" },
              { y: <?php echo $numero_prosciutto;?>, label: "Prosciutto" },
              { y: <?php echo $numero_tonno;?>, label: "Tonno" },
              { y: <?php echo $numero_funghi;?>, label: "Funghi" },
              { y: <?php echo $numero_melanzane;?>, label: "Melanzane" },
              { y: <?php echo $numero_mozzarella;?>, label: "Mozzarella" },
              { y: <?php echo $numero_origano;?>, label: "Origano" },
            ],
        },
    ],
});