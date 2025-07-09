<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture</title>
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
            <a href="#">Agriculture</a>
        </div>
        <div class="header-title-fa">
            <h2>Agriculture</h2>
        </div>
    </div>
</div>

<!--Herosection-->
<div class="hero-section"> 
    <div class="container">
        <img src="./assets/img/hero-img-fa.webp" alt="">
  
    </div>
</div>

<!--hero-content-->
<div class="hero-content">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-6">
                <h3>Overview</h3>
                <p>Agriculture is a major economic sector for the people of Rwanda,
                     employing about 64.5% of the total population. The industry contributes about
                      25% to GDP, and it stands out as one of the most strategic sectors in Rwanda’s 
                      development. It accounts for a more significant part of the foreign exchange
                       earnings from the exports of products, including; coffee, tea, livestock products,
                        cereals & grains, hides & skins, pyrethrum, and horticulture. 83.1% of Rwanda’s 
                        agricultural production comes from smallholder farmers.</p>
            </div>
            <div class="col-12 col-md-6">
                <p>About 61% of Rwandan soil is suitable for agriculture as the soils are fertile. 
                    The Government of Rwanda is tangibly committed to boosting the development of 
                    the country’s agri-sector. It has invested considerably in infrastructure,
                     productivity & resilience, inclusive markets & Value addition,
                      and innovation & extension while creating an Enabling Environment &
                       Responsive Institutions for private sector investment. Meanwhile,
                        investment opportunities exist in the following: Dairy, Poultry, Meat processing,
                         Horticulture, Aquaculture, Mechanization, crop sourcing, blockchain, Agro-tourism, 
                         manufacturing of irrigation equipment, and cold chain logistics.</p>
            </div>
        </div>
    </div>
</div>


<!--Investment Opportunities section-->

<div class="invest-section">
    <div class="container">
        <h2>Investment Opportunities</h2>
        <div class="invest-sec-cards">
            <div class="card-1">
                <h3>HORTICULTURE</h3>
                <p>In the bid to boost the country’s exports, Rwanda presents enormous opportunities in the highly competitive commodities such as; French beans, peas, horticulture specialties – baby corn, chilli, mini leek, African eggplants, mushrooms and herbs – Exotic fruits growing, especially apples, bananas, passion fruits, avocados, as well as flower growing.</p>
            </div>
            <div class="card-2">
            <div class="cards">
                <h3>POULTRY</h3>
                <p>Large-scale farms, slaughter houses and export of meat and feed mills.</p>
            </div>
            <div class="cards">
                <h3>FOOD PROCESSING</h3>
                <p>For domestic and international markets. staple foods with significant potential for growth include beans, rice, maize and potatoes.</p>
            </div>
            <div class="cards">
                <h3>VALUE ADDITION</h3>
                <p>Washing and roasting opportunities as premium coffee harvests grow.</p>
            </div>
            <div class="cards">
                <h3>MILK PROCESSING</h3>
                <p>Cold chain, processing of UHT milk, yogurt, cheese and butter.</p>
            </div>
            <div class="cards">
                <h3>DISTRIBUTION AND COLD CHAIN</h3>
                <p>Need for improved infrastructure for export products.</p>
            </div>
            <div class="cards">
                <h3>MECHANIZATION OPPORTUNITIES</h3>
                <p>Irrigation and sale of agricultural equipment for large- scale farming.</p>
            </div>
            </div>
        </div>
    </div>
</div>

<!--Incentives for investors in the sector section-->

<div class="Incentives">
    <div class="container">
        <h2>Incentives for investors in the sector</h2>
        <div class="incentives-content">
            <div class="card-1">
                <h3>Fiscal incentives offered</h3>
                <ul>
                    <li>Duty-free importation of all inputs</li>
                    <li>Tax exemption for agriculture equipment</li>
                    <li>50% reduction in corporate income tax, if you are a registered investor exporting 50% of the turnover of products produced in Rwanda</li>
                    <li>7-year tax holiday for export-oriented registered investment projects</li>
                </ul>
            </div>
            <div class="card-2">
                <h3>Non-fiscal incentives</h3>
                <ul>
                    <li>One-stop center facilitation to registered investors</li>
                    <li>Aftercare services with a focal point person following up on your project</li>
                    
                </ul>
            </div>  

        </div>
        </div>
</div>

 <?php require_once './assets/footer.php';?>
    .....

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> 
</body>
</html>