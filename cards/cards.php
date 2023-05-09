<?php
  //CARDS QUERY
  include("card1.php");
  include("card2.php");
  include("card3.php");
  include("card4.php");
?>

<!-- GRAFICO-->
<script type="text/javascript">
  window.onload = function () {
    <?php include("./functions/card1_function.php");?>
    <?php include("./functions/card2_function.php");?>
    <?php include("./functions/card3_function.php");?>
    <?php include("./functions/card4_function.php");?>
    chart1.render();
    chart2.render();
    chart4.render();
    chart3.render();
    function toogleDataSeries(e) {
      if (typeof e.dataSeries.visible === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      } else {
        e.dataSeries.visible = true;
      }
      chart.render();
    }    
  };
</script>