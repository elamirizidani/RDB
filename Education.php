<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
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
            <a href="#">Education </a>
        </div>
        <div class="header-title-fa">
            <h2>Education </h2>
        </div>
    </div>
</div>

<!--Herosection-->
<div class="hero-section">
    <div class="container">
        <img src="./assets/img/hero-imag2-fa.webp" alt=""> 
  
    </div>
</div>

<!--hero-content-->
<div class="hero-content">
    <div class="container">
        <div class="row gap-4">
            <div class="col-12 ">
                <h3>Overview</h3>
                <p>The Government of Rwanda aims to transform the country into upper middle income country by 2035,
                     and a high – income country by 2050. Achieving Rwanda’s social and economic develop¬ment objectives
                      is largely dependent upon its most valuable resource – it’s people. To achieve these goals, 
                      the Rwandan people must be provided opportunities to develop knowledge, skills and attitudes 
                      to compete in the labour market and contribute to the social and political life of their country.</p>
            </div>
            <div class="col-12 ">
                <h3>Structure of Rwanda’s education system</h3>
                <p>In Rwanda the education system is composed of four main levels: Pre-primary, Primary, Secondary,
                     and Higher Education, with a significant TVET stream at both secondary and higher education levels.
                        Pre-primary Education is organized in nursery schools and for a period of three years for children between the age of 4 and 6.
                        Primary education lasts six years with the official school age at this level being from 7 years to 12 years.
                        This stage focuses on core literacy and numeracy skills, as well as preparation for secondary studies.
                        Secondary Education also lasts for six years with the official age for this level being from 13 years to 18 years of age.
                         It is subdivided into lower secondary (the first three years) and upper secondary (the last three years),
                          both culminating in national examinations which respectively determine eligibility for university education.</p>
             </div>
        </div>
    </div>
</div>
<!--Investment Opportunities section-->

<div class="invest-section">
    <div class="container">
        <h2>Investment Opportunities</h2>
        <div class="invest-sec-cards ed-sec">
            
            <div class="Ed-card-1">
            <div class="cards">
                <h3>Technical and Vocational Education Training (TVET):</h3>
                <ul>
                    <li>Smart classrooms</li>
                    <li>E-learning</li>
                    <li>Digital content development</li>
                    <li>Teacher training in ICT at all levels.</li>
                </ul>
            </div>
            <div class="cards">
                <h3>ICT in Education</h3>
                <ul>
                    <li>Smart classrooms</li>
                    <li>E-learning</li>
                    <li>Digital content development</li>
                    <li>Teacher training in ICT at all levels.</li>
                </ul>
            </div>
            
            </div>

            <div class="Ed-card-2">
                <h3>Higher education and research</h3>
                <ul>
                    <li>Foreign universities are encouraged to open campuses in Rwanda (to promote study in Rwanda)</li>
                    <li>There are opportunities in constructing and managing student hostels in private and Gov-ernment universities.Incentives to support Education sector</li>
                    <li>Corporate income tax holiday of up to 7 years is provided when investing at least an amount equivalent to 50 million USD</li>
                    <li>Accelerated depreciation rate of 50% for the first year</li>
                    <li>Foreign companies investing at least 250,000 USD are allowed to recruit 3 foreigners without labour test.</li>
                    <li>Exemption of VAT on imported Technical and Vocational Education training materials</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once './assets/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> 
</body>
</html>