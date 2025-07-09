<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial services</title>
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
            <a href="#">Financial services </a>
        </div>
        <div class="header-title-fa">
            <h2>Financial services</h2>
        </div>
    </div>
</div>
<!--Herosection-->
<div class="hero-section">
    <div class="container">
        <img src="./assets/img/hero-imga3-fa.webp" alt="">
  
    </div>
</div>

<!--hero-content-->
<div class="hero-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6"> 
                <h3>Overview</h3>
                <p>Rwanda’s financial sector presents a range of investment opportunities, driven by a stable and modernized environment that is increasingly attracting both local and international investors.</p>
            </div>
        </div>
    </div>
</div>


<!--Investment Opportunities section-->

<div class="invest-section">
    <div class="container">
        <h2>Investment Opportunities</h2>
        <div class="invest-sec-cards ">
            
            <div class="financial-cards">
            <div class="cards">
                <h3>Banking Sector</h3>
                <p>Rwanda’s banking sector is well-capitalized, accounting for 66.1% of total financial sector assets. There are opportunities for international banks to establish representative offices, which can facilitate large projects and provide services such as trade finance and asset management. Additionally, there is a growing need for commercial banking products and services in rural areas to enhance financial inclusion.</p>
            </div>
            <div class="cards">
                <h3>Microfinance and SME Financing</h3>
                <p>With small and medium enterprises (SMEs) being significant drivers of job creation, there is a strong demand for microfinance and SME financing. Financial institutions specializing in these areas can tap into a market that is essential for economic development. Innovations like weather-based crop insurance and warehouse receipt schemes can further enhance agricultural financing.</p>
            </div>
            <div class="cards">
                <h3>Capital Markets</h3>
                <p>Rwanda is actively working to deepen its capital markets by issuing government bonds and encouraging private sector participation. This includes a focus on long-term financing solutions, private equity funds and Venture capital, fund management, collective investment schemes, Wealth management services, financial advisory, private banking and trust companies</p>
            </div>
            <div class="cards">
                <h3>Insurance Services</h3>
                <p>The insurance sector is also expanding, with opportunities in various schemes, including health, agricultural, and life insurance. The government encourages the development of insurance products tailored to the needs of the population, particularly in rural areas.</p>
            </div>
            <div class="cards">
                <h3>Real Estate Investment Trusts (REITs)</h3>
                <p>The establishment of commercial REITs presents significant opportunities, particularly in financing affordable housing and commercial properties. This aligns with the government’s focus on urban development and infrastructure improvement.</p>
            </div>
            <div class="cards">
                <h3>FinTech and Digital Finance</h3>
                <p>Rwanda is embracing financial technology (FinTech) as a means to enhance financial inclusion and efficiency. Investment in digital financial services, including mobile banking and online payment systems, is expected to grow, supported by the government’s push towards a cashless economy.</p>
            </div>
            <div class="cards">
                <h3>Pure holding company</h3>
                <p>A company that only owns assets or subsidiary and that company is not involved in any other commercial activities.</p>
            </div>
            <div class="cards">
                <h3>Global trading or paper trading</h3>
                <p>A commercial entity making deposits in financial entities in Rwanda to finance its trading activities outside Rwanda and not authorized to import or export goods in Rwanda.</p>
            </div>
            <div class="cards">
                <h3>Special purpose vehicle (SPV)</h3>
                <p>A separate legal entity created by another existing entity with its own balance sheet and with a specific objective.</p>
            </div>
            </div>

        </div>
    </div>
</div>

<!--Incentives section-->

<div class="Incentives">
    <div class="container">
        <h2>Incentives </h2>
        <div class="incentives-content-financial">
            <div class="card-1">
                
                <ul>
                    <li>15% preferential corporate income tax rate.</li>
                    <li>0% preferential withholding tax on dividends, interest and royalty payments for Pure holding companies, SPV, collective investment scheme, IPs, Global Trading, and other companies licensed by Capital Market Authority.</li>
                    <li>Licensed microfinance institutions are entitled to a corporate income tax holiday for a period of five (5) years from the date of their license. However, this period may be renewed upon fulfilling conditions prescribed in the Order of the Minister.</li>
                    <li>A preferential withholding tax of five percent (5%) applies to dividends and interest income paid to an investor investing in a company listed on the Rwanda Stock Exchange.</li>
                    <li>A registered investor in financial services does not pay capital gains tax. However, income derived from the sale of a commercial immovable property is included in the taxable income of the investor.</li>
                </ul>
            </div>  

        </div> 
</div>
</div>
<?php require_once './assets/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> 
</body>
</html>
