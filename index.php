<?php
// FILE INDEX.PHP
  include("inc/connessioni.php");
  include("inc/header.php");
?>

<body>
  <div class="main-container flex flex-col">
    <!-- MENU FOR MOBILE -->
    <div class="menu-mobile">
      <div class="menu-info flex flex-col ali-center jc-center">
        <div class="profile"><img src="assets/img/profile.png" alt="" /></div>
        <div>Nome: Pippo</div>
        <div>Position: CEO</div>
        <div>Codice Badge: #####</div>
        <div>Data: Aprile 20 2023</div>
      </div>
    </div>
    <!-- CONTAINER MENU -->
    <div class="container-menu flex flex-col">
      <div class="menu" onclick="active()"><img src="assets/img/menu.png" alt="" /></div>
      <div class="container-logo">
        <img src="assets/img/logo.png" />
        <h1>Pizza Slice</h1>
        <!-- MENU FOR DESKTOP -->
        <div class="menu-desktop">
          <div class="menu-info flex flex-col ali-center jc-center">
            <div class="profile">
              <img src="assets/img/profile.png" alt="" />
              <div>Nome: Pippo</div>
              <div>Position: CEO</div>
              <div>Codice Badge: #####</div>
              <div>Data: Aprile 20 2023</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTAINER -->
    <div class="container flex flex-col">
      <!-- CONTAINER-CARD -->
      <div class="container-card">
        <!-- CARD 1 -->
        <div class="card" id="card1">
          <div id="chartContainer1" style="height: 300px; width: 100% z-index: -100;"></div>
        </div>
        <!-- CARD 2 -->
        <div class="card" id="card2">           
          <div id="chartContainer2" style="height: 300px; width: 85%"></div>
        </div>
        <!-- CARD 3 -->
        <div class="card" id="card3">
            <div id="chartContainer3" style="height: 300px; width: 100%"></div>
        </div>
        <!-- CARD 4 -->
        <div class="card flex flex-row" id="card4">
          <div  id="chartContainer4" style="height: 300px; width: 100%"></div>
        </div>
      </div>
      <!-- CONTAINER-MINICARD -->
      <div class="container-minicard flex flex-row">
        <?php include("./mini_cards/mini_card.php");?>
      </div> 
      </div>
    <!-- </div> -->
  </div>

    <script>
      function active() {
        let x = document.querySelector(".menu-mobile");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>
