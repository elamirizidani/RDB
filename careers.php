<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/reusables.css?v=<?=intval(time());?>">
    <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= intval(time()); ?>"> 
    <title>careers</title>
</head>
<body>
 <!-- Header & Topbar -->
<?php require_once './assets/header.php';?>
    <section class="container-fluid careers-hero">
        <div class="container">
            <h1 class="careers-hero-title">Customer Support<br> 
Rwanda Development Board</h1>
        </div>       
    </section>

    <section class="container-fluid">
        <div class="careers-main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="careers-card">
                            <span class="careers-card-tag">Full Time</span>
                            <h3 class="careers-card-title mt-2">IT Support & Systems Administrator</h4>
                            <div class="careers-card-desc d-flex gap-4 mt-3 pt-2">
                                <span><i class="fa-solid fa-briefcase careers-icon"></i>7+ Years Experience</span>
                                <span><i class="fa-solid fa-location-dot careers-icon"></i>Remote</span>
                            </div>
                        </div> 
                        <div class="careers-card mt-4">
                            <span class="careers-card-tag">Full Time</span>
                            <h3 class="careers-card-title mt-2">Investment Promotion Officer</h4>
                            <div class="careers-card-desc d-flex gap-4 mt-3 pt-2">
                                <span><i class="fa-solid fa-briefcase careers-icon"></i>7+ Years Experience</span>
                                <span><i class="fa-solid fa-location-dot careers-icon"></i>Kigali-Rwanda</span>
                            </div>
                        </div>
                        <div class="careers-card mt-4">
                            <span class="careers-card-tag">Full Time</span>
                            <h3 class="careers-card-title mt-2">Economist – Policy & Strategy Unit</h4>
                            <div class="careers-card-desc d-flex gap-4 mt-3 pt-2">
                                <span><i class="fa-solid fa-briefcase careers-icon"></i>7+ Years Experience</span>
                                <span><i class="fa-solid fa-location-dot careers-icon"></i>Kigali-Rwanda</span>
                            </div>
                        </div>
                        <div class="careers-card mt-4">
                            <span class="careers-card-tag">Full Time</span>
                            <h3 class="careers-card-title mt-2">Tourism Development Specialist</h4>
                            <div class="careers-card-desc d-flex gap-4 mt-3 pt-2">
                                <span><i class="fa-solid fa-briefcase careers-icon"></i>7+ Years Experience</span>
                                <span><i class="fa-solid fa-location-dot careers-icon"></i>Kigali-Rwanda</span>
                            </div>
                        </div>
                        <div class="careers-card mt-4">
                            <span class="careers-card-tag">Full Time</span>
                            <h3 class="careers-card-title mt-2"> Communications & Content Officer</h4>
                            <div class="careers-card-desc d-flex gap-4 mt-3 pt-2">
                                <span><i class="fa-solid fa-briefcase careers-icon"></i>7+ Years Experience</span>
                                <span><i class="fa-solid fa-location-dot careers-icon"></i>Kigali-Rwanda</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="careers-catalog">
                            <h3 class="careers-catalog-title">RDB</h3>
                            <ul class="careers-catalog-list mt-3">
                                <li class="pt-4">Company Overview</li>
                                <li class="pt-4">Meet Our Team</li>
                                <li class="active pt-4">Job Vacancies</li>
                            </ul>
                        </div>
                        <button class="careers-btn mt-3">View Job Profiles (PDF)</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once './assets/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1e5afde2bc.js" crossorigin="anonymous"></script>
</body>
</html>