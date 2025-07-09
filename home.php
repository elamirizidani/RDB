<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rwanda Development Board</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icon-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="assets/css/rdb-style.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?=intval(time());?>">

</head>

<body>
    <!-- Header & Topbar -->
    <?php require_once './assets/header.php'; ?>

    <!-- Hero Section -->
    <section class="rdb-section rdb-hero">
        <video class="vr-hero-video" autoplay muted loop playsinline poster="./assets/img/rdb-hero-vid.webp">
            <source src="./assets/vids/home-hero-vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <div class="hero-content">
                <h1>Invest in Rwanda. Where <span class="yellow-color">Results</span> Drive Confidence.</h1>
                <p>Rwanda is where vision meets opportunity. From a thriving economy to investor-friendly policies, your
                    first reason to invest here will lead to countless more.</p>
                <a href="./about-rdb.php" class="btn btn-primary">Invest Now</a>
            </div>
        </div>
    </section>
    <!-- cursor  -->
    <section class="rdb-section rdb-highlights-section">
        <div class="container">
            <div id="statsCarousel" class="owl-carousel rdb-highlights">
                <div class="stat-slide">
                    <span>
                        <i class="rdb-icon custom-rdb-plane-slim"></i>
                    </span>
                    <div class="content-hodler">
                        <h4 class="numbers">8.9% GDP</h4>
                        <div class="stat-title">Rapid Economic Growth</div>
                        <p class="stat-description">8.9% GDP growth in 2024, among Africa's fastest</p>
                    </div>
                </div>
                <div class="stat-slide">
                    <span>
                        <i class="rdb-icon custom-rdb-plane-slim"></i>
                    </span>
                    <div class="content-hodler">
                        <h4 class="numbers"> 1.3 Billion</h4>
                        <div class="stat-title">Consumers’ Gateway </div>
                        <p class="stat-description">Access to pan-African and regional markets via AfCFTA, EAC, and
                            COMESA.</p>
                    </div>

                </div>
                <div class="stat-slide">
                    <span>
                        <i class="rdb-icon custom-rdb-plane-slim"></i>
                    </span>
                    <div class="content-hodler">
                        <h4 class="numbers">100%</h4>
                        <div class="stat-title">⁠Investor-Friendly Policies</div>
                        <p class="stat-description">100% foreign ownership permitted across sectors with certainty and
                            speed.</p>
                    </div>
                </div>
                <div class="stat-slide">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                            <path
                                d="M16.4629 2.30419L6.56877 11.2989V15.7962L9.26718 13.0978M2.07141 8.15075L16.4629 2.27271L13.9444 15.3465L2.07141 8.15075Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <div class="content-hodler">
                        <h4 class="numbers">$250M+</h4>
                        <div class="stat-title">Next Financial & Innovation Hub</div>
                        <p class="stat-description">Kigali International Financial Centre (KIFC) hosts 180+ entities
                            with $250M+
                            assets under management.b</p>
                    </div>
                </div>
                <div class="stat-slide">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                            <path
                                d="M16.4629 2.30419L6.56877 11.2989V15.7962L9.26718 13.0978M2.07141 8.15075L16.4629 2.27271L13.9444 15.3465L2.07141 8.15075Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <div class="content-hodler">
                        <h4 class="numbers">94,000 </h4>
                        <div class="stat-title">Skilled Talent Pool </div>
                        <p class="stat-description">Over 94,000 graduates annually ready to power your business</p>
                    </div>
                </div>
                <div class="stat-slide">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                            <path
                                d="M16.4629 2.30419L6.56877 11.2989V15.7962L9.26718 13.0978M2.07141 8.15075L16.4629 2.27271L13.9444 15.3465L2.07141 8.15075Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <div class="content-hodler">
                        <h4 class="numbers">6 hours</h4>
                        <div class="stat-title">⁠Seamless business registration process</div>
                        <p class="stat-description">Register your business online and get your certificate in just 6
                            hours!</p>
                    </div>
                </div>
                <div class="stat-slide">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                            <path
                                d="M16.4629 2.30419L6.56877 11.2989V15.7962L9.26718 13.0978M2.07141 8.15075L16.4629 2.27271L13.9444 15.3465L2.07141 8.15075Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <div class="content-hodler">
                        <div class="stat-title-next">Africa’s Top Investment Destination </div>
                        <p class="stat-description">Kigali International Financial Centre (KIFC) hosts 180+ entities
                            with $250M+
                            assets under management.b</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rdb-section rdb-why-invest padding-only-bottom">
        <div class="container">
            <div class="rdb-section-title">
                <h2 class="title-heading">Why Invest In Rwanda</h2>
            </div>
            <div class="rdb-grid">
                <!-- 01 Fastest Growing -->
                <div class="rdb-col">
                    <i class="rdb-icon custom-rdb-star"></i>
                    <div class="grid-content">
                        <div class="rdb-point-title">
                            <span class="rdb-point-number">01</span> Fastest Growing
                        </div>
                        <ul class="rdb-list rdb-list-star">
                            <li>3rd fastest growing economy in Africa with 7.7% (AfDB Africa Economic Outlook, 2025)
                            </li>
                            <li>Kigali International Financial Center (KIFC) ranked 3rd best in Africa</li>
                            <li>Young and growing population (64.5% are under 30), NISR, 2025 population projections
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 02 Business Friendly & Modern -->
                <div class="rdb-col">
                    <i class="rdb-icon custom-rdb-shake"></i>
                    <div class="grid-content">
                        <div class="rdb-point-title">
                            <span class="rdb-point-number">02</span> Business Friendly & Modern
                        </div>
                        <ul class="rdb-list rdb-list-star">
                            <li>Highest Performer #1 in Africa for conducive Business Environment, B-Ready Report 2024
                            </li>
                            <li>Ranked 3rd for government transparency in Africa (Corruption Perception Index, 2024)
                            </li>
                            <li>Most Women in Parliament, 63.8% (Inter-Parliamentary Union, 2025)</li>
                        </ul>
                    </div>
                </div>
                <!-- 03 IT Readiness -->
                <div class="rdb-col">
                    <i class="rdb-icon custom-rdb-tech-idea"></i>
                    <div class="grid-content">
                        <div class="rdb-point-title">
                            <span class="rdb-point-number">03</span> IT Readiness
                        </div>
                        <ul class="rdb-list rdb-list-star">
                            <li>2nd in EAC for internet network readiness (Network Readiness Index 2024)</li>
                            <li>2nd in Africa (Network Readiness Index 2024)</li>
                            <li>More than 98% 4G internet nationwide coverage</li>
                        </ul>
                    </div>
                </div>
                <!-- 04 Regional Platform -->
                <div class="rdb-col">
                    <i class="rdb-icon custom-rdb-tech-star"></i>
                    <div class="grid-content">
                        <div class="rdb-point-title">
                            <span class="rdb-point-number">04</span> Regional Platform
                        </div>
                        <ul class="rdb-list rdb-list-star">
                            <li>Strong African Hub Potential, highly connected African airline</li>
                            <li>2nd MICE ranking in Africa (ICCA, 2024)</li>
                            <li>Growing bilingual, educated workforce (24k grad tertiary/year), NISR Statistical Year
                                Book 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rdb-section rdb-investor-certainty padding-verticle">
        <div class="container">
            <div class="rdb-flex-grid">
                <div class="grid-content ">
                    <h2 class="title-heading">
                        Rwanda Welcomes Investors<br>
                        With Certainty, Speed, and Full<br>
                        Ownership
                    </h2>
                    <ul class="rdb-list rdb-list-star">
                        <li>100% foreign ownership allowed across sectors</li>
                        <li>No restrictions on capital repatriation, forex, or shareholding structures</li>
                        <li>One Stop Center at RDB offers fast-track licensing, permits, tax incentives, and aftercare
                        </li>
                        <li>Fully digitized business registration and licensing system</li>
                        <li>Among Africa’s best performers on contract enforcement and investor protection</li>
                    </ul>
                </div>
                <div style="min-height: 380px;"></div>
            </div>
        </div>
    </section>

    <section class="rdb-section rdb-investment-opportunity padding-verticle">
        <div class="container">
            <div class="rdb-flex-grid rdb-investment-opportunity-header">
                <div>
                    <h2 class="title-heading">
                        Discover Your Next<br>
                        Investment Opportunity
                    </h2>
                </div>
                <div>
                    <p class="rdb-section-desc">
                        Big ideas need the right place to grow. Rwanda offers a dynamic market full of possibilities.
                        Discover your next opportunity.
                    </p>
                </div>
            </div>

            <div class="rdb-grid rdb-opportunity-grid">
                <!-- Card 1 -->
                <a href="./Agriculture.php" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-3.webp" alt="Agriculture" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">Agriculture</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
                <!-- Card 2 -->
                <a href="./Education.php" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-2.webp" alt="Education" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">Education</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
                <!-- Card 3 -->
                <a href="./Energy.php" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-2.webp" alt="Energy" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">Energy</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
                <!-- Card 4 -->
                <a href="#" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-7.webp" alt="Financial Services" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">Financial services</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
                <!-- Card 5 -->
                <a href="./Mining.php" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-8.webp" alt="Mining" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">Mining</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
                <!-- Card 6 -->
                <a href="./ICT.php" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-9.webp" alt="ICT" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">ICT</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
                <!-- Card 7 -->
                <a href="./Health Services.php" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-10.webp" alt="Health Services" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">Health Services</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
                <!-- Card 8 -->
                <a href="./Infrastructure.php" class="rdb-opportunity-card">
                    <img src="./assets/img/rdb-img-11.webp" alt="Infrastructure" class="rdb-opportunity-image">
                    <div class="rdb-opportunity-info">
                        <div class="card-cat-title1">
                            <div class="rdb-opportunity-bar"></div>
                            <span class="rdb-opportunity-title">Infrastructure</span>
                        </div>
                        <span class="rdb-opportunity-arrow"><i class="rdb-icon custom-rdb-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="rdb-section-center">
                <a href="./invest-in-rwanda.php" class="btn rdb-btn-green">View All</a>
            </div>
        </div>
    </section>

    <section class="rdb-do-business padding-verticle">
        <div class="container">

            <!-- Do Business Hero Card -->
            <div class="rdb-do-business-hero"
                style="background-image:url('./assets/img/rdb-do-business-hero-img.png');">
                <button class="rdb-do-business-play" aria-label="Play Video">
                    <i class="rdb-icon custom-rdb-video-play"></i>
                </button>
                <div class="rdb-do-business-hero-content">
                    <h2>Do Business<br>With Ease</h2>
                </div>
            </div>

            <!-- Modal for video -->
            <div class="rdb-do-business-modal">
                <div class="rdb-do-business-modal-bg"></div>
                <div class="rdb-do-business-modal-content">
                    <button class="rdb-do-business-modal-close" aria-label="Close">
                        <i class="rdb-icon custom-rdb-x"></i>
                    </button>
                    <video class="rdb-do-business-vid" controls poster="./assets/img/rdb-do-business-hero-img.png">
                        <source src="./assets/vids/do-business-hero-vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <!-- Start Doing Business Section -->
            <div class="rdb-do-business-section">
                <div class="rdb-do-business-info">
                    <h3 class="rdb-do-business-title">Start Doing Business</h3>
                    <p class="rdb-do-business-desc">
                        Simplify your business journey with the One Stop Center, investment registration, licensing, and
                        essential services, all in one place
                    </p>
                </div>
                <div class="rdb-do-business-cards">
                    <!-- Card 1 -->
                    <a href="#" class="rdb-do-business-card">
                        <div class="rdb-do-business-card-icon">
                            <i class="rdb-icon custom-rdb-r"></i>
                        </div>
                        <div class="rdb-do-business-card-title">Business Registration</div>
                        <div class="rdb-do-business-card-link">
                            <span>Explore</span>
                            <i class="rdb-icon custom-rdb-arrow-right"></i>
                        </div>
                    </a>
                    <!-- Card 2 -->
                    <a href="#" class="rdb-do-business-card">
                        <div class="rdb-do-business-card-icon">
                            <i class="rdb-icon custom-rdb-custom-info"></i>
                        </div>
                        <div class="rdb-do-business-card-title">Permits & Licenses</div>
                        <div class="rdb-do-business-card-link">
                            <span>Explore</span>
                            <i class="rdb-icon custom-rdb-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest news -->
    <section class="news-section padding-verticle">
        <div class="container section-80">
            <h2 class="section-heading text-center">
                Latest News
            </h2>
            <div class="news-cards">
                <div class="single-news-card">
                    <img src="./assets/img/rdb-img-5.webp" alt="" class="news-featured-img">
                    <p class="news-title">
                        <a href="#">Visit Rwanda and Paris Saint-Germain (PSG) Renew Groundbreaking Partnership
                            Through.</a>
                    </p>
                    <p class="news-excerpt small-text-font">
                        Visit Rwanda and Paris Saint-Germain (PSG) have renewed their transformative partnership through
                        2028, building on a ...
                    </p>
                    <a href="#" class="continue-btn">
                        Continue Reading
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27"
                                fill="none">
                                <path
                                    d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z"
                                    fill="#009448" />
                            </svg>
                        </span>
                    </a>
                </div>


                <div class="single-news-card">
                    <img src="./assets/img/rdb-img-6.webp" alt="" class="news-featured-img">
                    <p class="news-title">
                        <a href="#">Visit Rwanda Becomes Atlético de Madrid’s First-Ever African Partner</a>
                    </p>
                    <p class="news-excerpt small-text-font">
                        The Rwanda Development Board (RDB) and 11-time La Liga champions Atlético de Madrid have
                        announced a momentous ...
                    </p>
                    <a href="#" class="continue-btn">
                        Continue Reading
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27"
                                fill="none">
                                <path
                                    d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z"
                                    fill="#009448" />
                            </svg>
                        </span>
                    </a>
                </div>


                <div class="single-news-card">
                    <img src="./assets/img/rdb-img-4.webp" alt="" class="news-featured-img">
                    <p class="news-title">
                        <a href="">RDB Annual Report Highlights Strong Economic Performance and Strategic ..</a>
                    </p>
                    <p class="news-excerpt small-text-font">
                        Collaboratively disintermediate move to The Rwanda Development Board (RDB) has released its 2024
                        Annual Report, ..
                    </p>
                    <a href="#" class="continue-btn">
                        Continue Reading
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27"
                                fill="none">
                                <path
                                    d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z"
                                    fill="#009448" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <a href="./news.php" class="view-all-btn text-white">
                View All
            </a>
        </div>
    </section>

    <?php require_once './assets/footer.php'; ?>
    .....

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Your custom carousel logic -->
    <script src="./assets/js/home-script.js?v=<?= intval(time()); ?>"></script>

</body>

</html>