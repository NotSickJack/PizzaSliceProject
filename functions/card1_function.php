var chart1 = new CanvasJS.Chart("chartContainer1", {
  backgroundColor: "#CC4343",
  animationEnabled: true,
  theme: "dark2",
  title: {
    text: "Uscite & Entrate",
  },
  axisX: {
    valueFormatString: "DD MMM",
    crosshair: {
      enabled: true,
      snapToDataPoint: true,
    },
  },
  axisY: {
    title: "Uscite & Entrate",
    includeZero: true,
    crosshair: {
      enabled: true,
    },
  },
  toolTip: {
    shared: true,
  },
  legend: {
    cursor: "pointer",
    verticalAlign: "bottom",
    horizontalAlign: "left",
    dockInsidePlotArea: true,
    itemclick: toogleDataSeries,
  },
  data: [
    {
      type: "line",
      showInLegend: true,
      name: "Uscite",
      markerType: "square",
      xValueFormatString: "DD MMM, YYYY",
      color: "#EFFF00",
      dataPoints: [
      <?php
        while ($ordine_uscite = $result_usc->fetch_array()) {
          $data_uscita = date("Y, m-1, d", strtotime($ordine_uscite["date"]));
          $numero_uscita = $ordine_uscite["uscite"];
          echo "{ x: new Date($data_uscita), y: $numero_uscita }, ";
        }
      ?>
      ],
    },
    {
      type: "line",
      showInLegend: true,
      name: "Entrate",
      lineDashType: "dash",
      dataPoints: [
      <?php
        while ($ordine_entrate = $result_ent->fetch_array()) {
          $data_entrata = date("Y, m-1, d", strtotime($ordine_entrate["data"]));
          $numero_entrata = $ordine_entrate["somma_prezzo"];
          echo "{ x: new Date($data_entrata), y: $numero_entrata },";
        }
      ?>
      ],
    },
  ],
});    
