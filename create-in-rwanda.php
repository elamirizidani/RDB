<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rwanda Development Board</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icon-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="assets/css/bruce-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?=intval(time());?>">

</head>

<body class="page create-in-rwanda-page page-w-static-header">
    <!-- Header & Topbar -->
    <?php require_once './assets/header.php'; ?>

    <!-- Hero Section -->
    <section class="create-rwanda-hero rdb-top-hero-1">
        <div class="container">
            <div class="col-md-6 hero-contentsx">
                <div class="breadcrumb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                        <path
                            d="M17.2761 9.30106C17.2761 9.13209 17.2089 8.97004 17.0895 8.85056C16.97 8.73108 16.8079 8.66396 16.639 8.66396C16.47 8.66396 16.3079 8.73108 16.1885 8.85056C16.069 8.97004 16.0019 9.13209 16.0019 9.30106H17.2761ZM5.38355 9.30106C5.38355 9.13209 5.31643 8.97004 5.19695 8.85056C5.07747 8.73108 4.91542 8.66396 4.74645 8.66396C4.57748 8.66396 4.41543 8.73108 4.29596 8.85056C4.17648 8.97004 4.10935 9.13209 4.10935 9.30106H5.38355ZM17.8877 11.4502C17.946 11.5128 18.0163 11.563 18.0945 11.5978C18.1726 11.6326 18.257 11.6514 18.3425 11.6529C18.4281 11.6544 18.5131 11.6387 18.5924 11.6066C18.6717 11.5746 18.7438 11.5269 18.8043 11.4664C18.8648 11.4059 18.9125 11.3338 18.9445 11.2545C18.9766 11.1752 18.9923 11.0902 18.9908 11.0046C18.9893 10.9191 18.9706 10.8347 18.9357 10.7566C18.9009 10.6784 18.8507 10.6081 18.7881 10.5498L17.8877 11.4502ZM10.6927 3.3548L11.1429 2.90458C11.0235 2.78528 10.8615 2.71826 10.6927 2.71826C10.5239 2.71826 10.3619 2.78528 10.2425 2.90458L10.6927 3.3548ZM2.59731 10.5498C2.53471 10.6081 2.48451 10.6784 2.44968 10.7566C2.41486 10.8347 2.39614 10.9191 2.39463 11.0046C2.39312 11.0902 2.40886 11.1752 2.4409 11.2545C2.47294 11.3338 2.52064 11.4059 2.58113 11.4664C2.64163 11.5269 2.71369 11.5746 2.79302 11.6066C2.87235 11.6387 2.95733 11.6544 3.04287 11.6529C3.12841 11.6514 3.21278 11.6326 3.29093 11.5978C3.36908 11.563 3.43941 11.5128 3.49774 11.4502L2.59731 10.5498ZM6.44538 19.2823H14.94V18.0081H6.44538V19.2823ZM17.2761 16.9462V9.30106H16.0019V16.9462H17.2761ZM5.38355 16.9462V9.30106H4.10935V16.9462H5.38355ZM18.7881 10.5498L11.1429 2.90458L10.2425 3.80502L17.8877 11.4502L18.7881 10.5498ZM10.2425 2.90458L2.59731 10.5498L3.49774 11.4502L11.1429 3.80502L10.2425 2.90458ZM14.94 19.2823C15.5596 19.2823 16.1538 19.0362 16.5919 18.5981C17.0299 18.16 17.2761 17.5658 17.2761 16.9462H16.0019C16.0019 17.5324 15.5262 18.0081 14.94 18.0081V19.2823ZM6.44538 18.0081C5.85925 18.0081 5.38355 17.5324 5.38355 16.9462H4.10935C4.10935 17.5658 4.35547 18.16 4.79356 18.5981C5.23165 19.0362 5.82583 19.2823 6.44538 19.2823V18.0081Z"
                            fill="white" />
                    </svg>
                    <span>Home / Rwanda At Glance</span>
                </div>
                <h1 class="hero-heading">
                    Create in <span class="orange-color">Rwanda.</span><br /> Protect, Produce & Prosper.
                </h1>
                <p class="hero-descr">From intellectual property to film production, Rwanda empowers creators with the
                    tools, protection, and support to bring bold ideas to life.</p>
            </div>
        </div>
    </section>

    <!-- FILM LOCATIONS -->
    <div class="col-md-12 film-location-section">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <h2 class="subheading">FILM LOCATIONS</h2>
                        <div class="heading">What are you Interested in?</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-2">
                        <div class="film-locations film-location-1">Volcanoes</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="p-2">
                        <div class="film-locations film-location-2">Rainforests</div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="p-2">
                        <div class="film-locations film-location-3">Lakes</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-2">
                        <div class="film-locations film-location-4">Cities</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-2">
                        <div class="film-locations film-location-5">Savannah</div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <!-- <div class="p-2"> -->
                    <div class="film-location-ctax">
                        <div class="cta-heading"> Visit Rwanda Film Officer </div>
                        <div class="rdb-btn">Apply for Filming Permits</div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>
    </div>


    <!-- <section class="film-location-section">
        <div class="container">
            <div class="flex-row">
                <div class="section-title">
                    <h2 class="subheading">FILM LOCATIONS</h2>
                    <div class="heading">What are you Interested in?</div>
                </div>
                <div class="film-location film-location-1">Volcanoes</div>
                <div class="film-location film-location-2">Rainforests</div>
            </div>
            <div class="flex-row">
                <div class="film-location film-location-3">Lakes</div>
                <div class="film-location film-location-4">Cities</div>
                <div class="film-location film-location-5">Savannah</div>
                <div class="film-location-cta">
                    <div class="cta-heading"> Visit Rwanda Film Officer </div>
                    <div class="rdb-btn">Apply for Filming Permits</div>
                </div>
            </div>
        </div>
    </section> -->


    <div class="col-md-12 intellectual-property-section">
        <div class="container">
            <div class="section-title">
                <h2 class="subheading">Intellectual Property Protection</h2>
                <div class="heading">Safeguard Your Creations.<br /> Empower Your Innovation.</div>
            </div>
            <div class="row gy-3 justify-content-center">
                <div class="col-md-4">
                    <div class="flex-grid-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="64" viewBox="0 0 65 64" fill="none">
                            <path
                                d="M32.666 6.5C27.6226 6.5 22.6924 7.99555 18.499 10.7975C14.3055 13.5995 11.0371 17.5821 9.1071 22.2416C7.17706 26.9011 6.67208 32.0283 7.656 36.9748C8.63993 41.9213 11.0686 46.465 14.6348 50.0312C18.201 53.5975 22.7447 56.0261 27.6912 57.01C32.6377 57.9939 37.7649 57.489 42.4245 55.5589C47.084 53.6289 51.0665 50.3605 53.8685 46.167C56.6705 41.9736 58.166 37.0434 58.166 32C58.1581 25.2394 55.4689 18.758 50.6885 13.9775C45.908 9.19709 39.4266 6.50794 32.666 6.5ZM32.666 54.5C28.2159 54.5 23.8658 53.1804 20.1657 50.7081C16.4656 48.2357 13.5817 44.7217 11.8787 40.6104C10.1758 36.499 9.73019 31.975 10.5984 27.6105C11.4665 23.2459 13.6094 19.2368 16.7561 16.0901C19.9028 12.9434 23.9119 10.8005 28.2765 9.93233C32.6411 9.06416 37.1651 9.50974 41.2764 11.2127C45.3877 12.9157 48.9018 15.7996 51.3741 19.4997C53.8464 23.1998 55.166 27.5499 55.166 32C55.1594 37.9653 52.7868 43.6845 48.5686 47.9026C44.3505 52.1207 38.6314 54.4934 32.666 54.5ZM28.166 26C28.166 26.3978 28.008 26.7794 27.7267 27.0607C27.4454 27.342 27.0639 27.5 26.666 27.5H24.166V38C24.166 38.3978 24.008 38.7794 23.7267 39.0607C23.4454 39.342 23.0639 39.5 22.666 39.5C22.2682 39.5 21.8867 39.342 21.6054 39.0607C21.3241 38.7794 21.166 38.3978 21.166 38V27.5H18.666C18.2682 27.5 17.8867 27.342 17.6054 27.0607C17.3241 26.7794 17.166 26.3978 17.166 26C17.166 25.6022 17.3241 25.2206 17.6054 24.9393C17.8867 24.658 18.2682 24.5 18.666 24.5H26.666C27.0639 24.5 27.4454 24.658 27.7267 24.9393C28.008 25.2206 28.166 25.6022 28.166 26ZM48.166 26V38C48.166 38.3978 48.008 38.7794 47.7267 39.0607C47.4454 39.342 47.0639 39.5 46.666 39.5C46.2682 39.5 45.8867 39.342 45.6054 39.0607C45.3241 38.7794 45.166 38.3978 45.166 38V30L40.796 35C40.6553 35.1596 40.4822 35.2874 40.2882 35.375C40.0942 35.4626 39.8838 35.5078 39.671 35.5078C39.4582 35.5078 39.2478 35.4626 39.0539 35.375C38.8599 35.2874 38.6868 35.1596 38.546 35L34.166 30V38C34.166 38.3978 34.008 38.7794 33.7267 39.0607C33.4454 39.342 33.0639 39.5 32.666 39.5C32.2682 39.5 31.8867 39.342 31.6054 39.0607C31.3241 38.7794 31.166 38.3978 31.166 38V26C31.1632 25.6935 31.2544 25.3935 31.4273 25.1404C31.6001 24.8873 31.8464 24.6932 32.1329 24.5843C32.4193 24.4754 32.7323 24.4568 33.0297 24.5312C33.327 24.6055 33.5945 24.7691 33.796 25L39.666 31.7225L45.536 25.0125C45.7369 24.7824 46.0032 24.6191 46.2993 24.5445C46.5955 24.4698 46.9074 24.4873 47.1933 24.5947C47.4792 24.702 47.7256 24.8941 47.8994 25.1453C48.0732 25.3964 48.1662 25.6946 48.166 26Z"
                                fill="#006AB2" />
                        </svg>
                        <h4>Registration of Trademarks and Logos</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flex-grid-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                            <path
                                d="M47.9994 54.6668C50.37 54.1335 52.17 53.2588 53.6233 51.8215C57.3327 48.1468 57.3327 42.2375 57.3327 30.4135C57.3327 18.5895 57.3327 12.6802 53.6233 9.0055C49.9113 5.3335 43.9434 5.3335 31.9993 5.3335C20.058 5.3335 14.0847 5.3335 10.3753 9.0055C6.66602 12.6775 6.66602 18.5895 6.66602 30.4135C6.66602 42.2375 6.66602 48.1468 10.3753 51.8215C11.8287 53.2615 13.6287 54.1335 15.9993 54.6668M6.66602 22.6668H57.3327M18.666 14.6668H18.69M29.3327 14.6668H29.3567"
                                stroke="#006AB2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M31.9996 34.667C28.1969 34.667 25.7329 37.091 22.8209 37.9737C21.6369 38.331 21.0449 38.5123 20.8049 38.7657C20.5649 39.019 20.4956 39.387 20.3543 40.1257C18.8529 48.043 22.1356 55.3603 29.9676 58.2057C30.8076 58.515 31.2289 58.667 32.0023 58.667C32.7756 58.667 33.1943 58.515 34.0369 58.2083C41.8663 55.3603 45.1463 48.043 43.6449 40.1283C43.5036 39.387 43.4316 39.0163 43.1943 38.7657C42.9569 38.515 42.3623 38.331 41.1783 37.9737C38.2636 37.091 35.7969 34.667 31.9969 34.667"
                                stroke="#006AB2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Patent and Industrial Design Protection</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flex-grid-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="64" viewBox="0 0 65 64" fill="none">
                            <path
                                d="M32.332 6C27.1897 6 22.1629 7.52487 17.8872 10.3818C13.6115 13.2387 10.2791 17.2994 8.31118 22.0502C6.3433 26.8011 5.82841 32.0288 6.83163 37.0723C7.83484 42.1159 10.3111 46.7486 13.9473 50.3848C17.5834 54.0209 22.2162 56.4972 27.2597 57.5004C32.3032 58.5036 37.5309 57.9887 42.2818 56.0209C47.0327 54.053 51.0933 50.7205 53.9503 46.4448C56.8072 42.1691 58.332 37.1423 58.332 32C58.3248 25.1066 55.5831 18.4976 50.7088 13.6233C45.8344 8.74889 39.2254 6.00728 32.332 6ZM32.332 54C27.9809 54 23.7274 52.7097 20.1095 50.2923C16.4916 47.8749 13.6718 44.439 12.0067 40.419C10.3416 36.3991 9.90589 31.9756 10.7548 27.708C11.6036 23.4404 13.6989 19.5204 16.7757 16.4437C19.8524 13.3669 23.7725 11.2716 28.0401 10.4227C32.3076 9.57385 36.7311 10.0095 40.7511 11.6747C44.7711 13.3398 48.207 16.1596 50.6244 19.7775C53.0418 23.3953 54.332 27.6488 54.332 32C54.3254 37.8327 52.0055 43.4247 47.8811 47.549C43.7567 51.6734 38.1648 53.9934 32.332 54ZM24.332 32C24.332 33.6791 24.8603 35.3156 25.8421 36.6777C26.8239 38.0398 28.2093 39.0585 29.8022 39.5895C31.3951 40.1204 33.1147 40.1367 34.7174 39.6361C36.3201 39.1355 37.7246 38.1432 38.732 36.8C39.0506 36.3757 39.5247 36.0952 40.0501 36.0205C40.5754 35.9457 41.1089 36.0827 41.5333 36.4012C41.9576 36.7198 42.238 37.194 42.3128 37.7193C42.3876 38.2446 42.2506 38.7782 41.932 39.2025C40.4205 41.2168 38.3136 42.7044 35.9097 43.4549C33.5058 44.2053 30.9267 44.1804 28.5377 43.3837C26.1487 42.587 24.0709 41.059 22.5986 39.0159C21.1262 36.9728 20.3339 34.5183 20.3339 32C20.3339 29.4817 21.1262 27.0272 22.5986 24.9841C24.0709 22.941 26.1487 21.413 28.5377 20.6163C30.9267 19.8196 33.5058 19.7947 35.9097 20.5451C38.3136 21.2956 40.4205 22.7832 41.932 24.7975C42.0898 25.0076 42.2046 25.2467 42.2699 25.5012C42.3353 25.7557 42.3499 26.0206 42.3128 26.2807C42.2758 26.5408 42.1879 26.7911 42.0541 27.0173C41.9204 27.2434 41.7434 27.441 41.5333 27.5987C41.3232 27.7565 41.084 27.8713 40.8296 27.9367C40.5751 28.002 40.3102 28.0166 40.0501 27.9795C39.79 27.9425 39.5397 27.8546 39.3135 27.7209C39.0874 27.5871 38.8898 27.4101 38.732 27.2C37.7246 25.8568 36.3201 24.8645 34.7174 24.3639C33.1147 23.8633 31.3951 23.8796 29.8022 24.4105C28.2093 24.9415 26.8239 25.9602 25.8421 27.3223C24.8603 28.6844 24.332 30.3209 24.332 32Z"
                                fill="#006AB2" />
                        </svg>
                        <h4>Copyright Registration for Creative Works</h4>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="flex-grid-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="64" viewBox="0 0 65 64" fill="none">
                            <path
                                d="M40.4993 53.1278L24.4993 47.5278L11.166 52.7012V15.4185L24.4993 10.8745L40.4993 16.4745L53.8327 11.3012V48.7412L40.4993 53.1278ZM39.166 49.8745V18.6745L25.8327 14.0212V45.2212L39.166 49.8745ZM41.8327 49.8745L51.166 46.7998V15.1998L41.8327 18.6772V49.8745ZM13.8327 48.7998L23.166 45.2212V14.0212L13.8327 17.1998V48.7998Z"
                                fill="#006AB2" />
                        </svg>
                        <h4>Geographical Indications and Utility Models</h4>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <div class="flex-grid-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="64" viewBox="0 0 65 64" fill="none">
                            <path
                                d="M8.5 37.3335V26.6668C8.5 16.6108 8.5 11.5815 11.6253 8.45883C14.7507 5.33616 19.7773 5.3335 29.8333 5.3335H35.1667C45.2227 5.3335 50.252 5.3335 53.3747 8.45883C56.4973 11.5842 56.5 16.6108 56.5 26.6668V37.3335C56.5 47.3895 56.5 52.4188 53.3747 55.5415C50.2493 58.6642 45.2227 58.6668 35.1667 58.6668H29.8333C19.7773 58.6668 14.748 58.6668 11.6253 55.5415C8.50267 52.4162 8.5 47.3895 8.5 37.3335Z"
                                stroke="#006AB2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M30.722 28.4453C33.5353 31.2587 37.242 34.1173 37.242 34.1173L42.3193 29.0373C42.3193 29.0373 39.4607 25.3307 36.65 22.5173C33.834 19.7067 30.1273 16.8453 30.1273 16.8453L25.05 21.9253C25.05 21.9253 27.9087 25.632 30.722 28.4453ZM30.722 28.4453L21.834 37.3333M43.1673 28.1893L36.394 34.9627M30.9807 16L24.2073 22.7733M21.834 48H43.1673"
                                stroke="#006AB2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Legal Frameworks for IP Enforcement</h4>
                    </div>
                </div>
            </div>
            <div class="section-cta">
                <a href="" class="rdb-btn rdb-btn-1">Download Registration Guideline</a>
                <a href="" class="rdb-btn rdb-btn-2">Download Application Forms</a>
            </div>
        </div>
    </div>


    <!-- CTA Page Breaker -->
    <section class="cta-section-hero">
        <div class="container">
            <div class="hero-contents">
                <div class="section-title">
                    <h2>Rwanda Film Office</h2>
                    <p class="hero-heading">Film in Rwanda: Your Story, Our Landscape</p>
                </div>
                <p class="hero-descr">
                    The Rwanda Film Office (RFO), a division of the Rwanda Development Board, is your gateway to filming
                    in
                    Rwanda. RFO facilitates the production process for both local and international filmmakers, ensuring
                    a
                    seamless experience from pre-production to post-production.
                </p>
                <a href="#" class="rdb-btn">Visit Official Site</a>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="partners-section">
        <div class="container">
            <div class="rdb-grid">
                <div class="rdb-grid-item">
                    <div class="partner-logo">
                        <img src="./assets/img/partner-logo-1.svg" alt="">
                    </div>
                    <div class="grid-contents">
                        <h4 class="item-title">MY CULTURE</h4>
                        <p class="item-descr">
                            The Ministry of Youth and Culture (MYCULTURE) is a Central Government Institution mandated
                            to make
                            Rwandan culture the foundation for national transformation. The Directorate of Culture,
                            under MYCULTURE, looks systematically and comprehensively the promotion of Culture and Art
                            related fields.
                        </p>
                    </div>
                </div>
                <div class="rdb-grid-item">
                    <div class="partner-logo">
                        <img src="./assets/img/partner-logo-1.svg" alt="">
                    </div>
                    <div class="grid-contents">
                        <h4 class="item-title">RCHA</h4>
                        <p class="item-descr">
                            The Rwanda Cultural Heritage Academy (RCHA), an agency affiliated to MYCULTURE, has
                            responsibility
                            to contribute to the promotion of artistic creations, including film.
                        </p>
                    </div>
                </div>
                <div class="rdb-grid-item">
                    <div class="partner-logo">
                        <img src="./assets/img/partner-logo-2.png" alt="">
                    </div>
                    <div class="grid-contents">
                        <h4 class="item-title">RCAA</h4>
                        <p class="item-descr">
                            The Rwanda Civil Aviation Authority (RCAA) is mandated to regulate and ensure oversight of
                            Aviation Safety & Security; Economic regulation of
                            Air Services and development of Civil Aviation as guided by the provisions of the convention
                            on international civil aviation.
                        </p>
                    </div>
                </div>
                <div class="rdb-grid-item">
                    <div class="partner-logo">
                        <img src="./assets/img/partner-logo-3.png" alt="">
                    </div>
                    <div class="grid-contents">
                        <h4 class="item-title">RFO</h4>
                        <p class="item-descr">
                            The Rwanda Film Office (RFO) was established by the Rwanda Development Board (RDB) in 2019,
                            and has been a major step towards creating a film-
                            friendly environment and infrastructure. RFO is dedicated to the cultural, commercial and
                            industrial success of Rwanda ́s audiovisual industry.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php require_once './assets/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Your custom carousel logic -->
    <script src="./assets/js/home-script.js?v=<?= intval(time()); ?>"></script>
    <script>
    // Initialize vertical carousel
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = document.getElementById('statsCarousel');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000, // Change slide every 3 seconds
            wrap: true,
            pause: false
        });
    });
    </script>
</body>

</html>