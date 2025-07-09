<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/fa-styles.css?v=<?=intval(time());?>">
    <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="./assets/css/icon-styles.css">
</head>
<body>
    <!-- Header & Topbar -->
<?php require_once './assets/header.php';?>
   <!--sub header-->
<div class="header-contain-fa">
    <div class="container">
        <div class="feader-links-fa">
            <a href="#">Home</a><i class="bi bi-chevron-right"></i>
            <a href="#">Explore Your Sector</a> <i class="bi bi-chevron-right"></i>
            <a href="#">Energy</a>
        </div>
        <div class="header-title-fa">
            <h2>Energy</h2>
        </div>
    </div>
</div>
<!--Herosection-->
<div class="hero-section">
    <div class="container">
        <img src="./assets/img/hero-imag7-fa.webp" alt="">
  
    </div>
</div> 

<!--hero-content-->
<div class="hero-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 overview-contents">
                <h3>Overview</h3>
               <p>Rwanda’s energy sector is characterized by a diverse mix of energy sources and a strong commitment to increasing access to electricity.</p>
               <p>Rwanda’s energy targets under the National Strategy for Transformation 2 (NST2) focus on achieving universal electricity access and enhancing the overall energy capacity of the nation.</p>
               <p>The country aims to scale the adoption of clean and biomass-efficient cooking solutions and explore and develop nuclear technology for productive uses in the health, energy, and agriculture sectors.</p>
               <ul class="fa-list">
                <li>Total installed power generation capacity of 408.9 MW</li>
                <li>Electricity Access rate estimated to 75.9 % (54 % on-grid and 21.9 % off-grid)</li>
                <li>Rwanda’s generation technology, 51% is from thermal sources,43.9% from Hydro and 4.2% from Solar sources</li>
               </ul>
            </div>
        </div>
    </div>
</div>
<!--Investment Opportunities section-->

<div class="invest-section">
    <div class="container">
        <h2>Investment Opportunities</h2>
        <div class="invest-sec-cards mining-sec">
            
            <div class="Ed-card-1">
            <div class="cards">
                <h3>Exploration</h3>
                <div>
                    <p>The Government of Rwanda has invested in exploration works in Prospective Target Areas to generate good primary geology data to be used by mineral exploration companies. Intensive, up to date and detailed mineral exploration can be carried out in the recently identified Prospective Target Areas (PTAs) to delineate and quantify their mineral resources.</p>
                </div>
            </div>
            <div class="cards">
                <h3>Value Addition</h3>
                <p>Some of the Rwanda’s mineral ores produced in the country are exported as 100% raw mineral concentrates, not as metals. The establishment of processing plants to smelt cassiterite into tin, refining wolframite into tungsten, tantalite into tantalum, gemstones cutting and polishing.</p>
            </div>
            <div class="cards">
                <h3>Industrial Mining</h3>
                <p>Currently, Rwanda’s mining sector is mostly traditional; Modern technology is needed to upgrade the sector to a semi- mechanized and later at industrial level to increase production, which is low compared to the proven potential Mining equipment including drillers, bulldozers, gravity table shakers are needed to upgrade the sector.</p>
            </div>
            <div class="cards">
                <h3>Trade in mineral substances</h3>
                <p>Trade in mineral substances is carried out by holders of mining and mineral trading licenses and owners of smelting companies. Trading in minerals, including cassiterite, wolframite and niobium – tantalite, must contain at least 30% value added.</p>
            </div>
            </div>

            
        </div>
    </div>
</div>
<?php require_once './assets/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> 
</body>
</html>