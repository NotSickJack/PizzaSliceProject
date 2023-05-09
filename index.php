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
        <div class="container-menu flex flex-col" data-aos="flip-right">
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
        <div class="container flex flex-col">
            <div class="container-card">
                <!-- Grafico Entrate/Uscite  -->
                <div class="card" id="card1" data-aos="fade-right">
                    <div id="chartContainer1" style="height: 300px; width: 100% z-index: -100;"></div>
                </div>
                <!-- Grafico Ordini -->
                <div class="card" id="card2" data-aos="fade-left">
                    <div id="chartContainer2" style="height: 300px; width: 85%"></div>
                </div>
                <!-- Grafico Zone ordini -->
                <div class="card" id="card3" data-aos="fade-right">
                    <div id="chartContainer3" style="height: 300px; width: 100%"></div>
                </div>
                <!-- Grafico Ingredienti -->
                <div class="card flex flex-row" id="card4" data-aos="fade-left">
                    <div id="chartContainer4" style="height: 300px; width: 100%"></div>
                </div>
            </div>
            <!-- Grafico Pizze Ordinate -->
            <div class="container-minicard flex flex-row">
                <?php include("./mini_cards/mini_card.php"); ?>
            </div>
        </div>
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

    AOS.init({
        disable: 'mobile'
    });
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>