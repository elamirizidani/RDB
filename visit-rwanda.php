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

<body class="page vr-page page-w-static-header">
    <!-- Header & Topbar -->
    <?php require_once './assets/header.php'; ?>

    <!-- Hero Section -->
    <section class="vr-hero rdb-top-hero-1">
        <video class="vr-hero-video" autoplay muted loop playsinline poster="./assets/img/vr-hero-vid.webp">
            <source src="./assets/vids/vr-vid-promo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">

            <div class="col-md-6 hero-contents">
                <h1 class="hero-heading">
                    Rwanda <span class="orange-color">Awaits. A World Within One Country
                </h1>
                <p class="hero-descr">
                    From breathtaking landscapes to unforgettable culture, Rwanda is more than a destination — it’s an
                    experience waiting to be explored.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Visit Rwanda? -->


    <div class="col-md-12 why-visit" style="padding-top: 60px;">
        <div class="container">
            <div class="row section-title-wrapper">
                <div class="col-md-6 section-title">
                    <h2 class="subheading">Why Visit Rwanda?</h2>
                    <div class="heading">Discover the <br />Heart of Africa</div>
                </div>
                <p class="col-md-6 title-descr">
                    With world-class venues, a strong safety record, excellent infrastructure, and visa-on-arrival for
                    all, Rwanda is one of Africa’s top MICE destinations.
                </p>
            </div>
            <div class="row gy-3 rdb-grid-items">
                <a class="col-md-4 d-flex">
                    <div class="rdb-grid-item">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63"
                                fill="none">
                                <path
                                    d="M36.8333 15.8765L27.1458 28.7931L34.5083 38.6098L30.375 41.7098C26.0092 35.8973 18.75 26.2098 18.75 26.2098L3.25 46.8765H60.0833L36.8333 15.8765Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4>Home of the mountain gorillas</h4>
                    </div>
                </a>

                <a class="col-md-4 d-flex">
                    <div class="rdb-grid-item">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="63" viewBox="0 0 62 63"
                                fill="none">
                                <path
                                    d="M17.6756 36.5019C19.145 36.2969 20.6369 36.3152 22.1008 36.5561C25.4411 37.0986 28.616 38.721 31.9769 40.6817C38.0658 44.2338 44.7541 43.5285 48.6033 40.7773C48.8104 40.6294 49.0446 40.5237 49.2925 40.4663C49.5405 40.4089 49.7973 40.4009 50.0484 40.4428C50.2994 40.4846 50.5397 40.5755 50.7556 40.7103C50.9715 40.845 51.1588 41.021 51.3067 41.2281C51.4546 41.4352 51.5603 41.6694 51.6177 41.9174C51.6751 42.1653 51.6831 42.4221 51.6412 42.6732C51.5994 42.9242 51.5085 43.1646 51.3737 43.3805C51.239 43.5964 51.063 43.7836 50.8559 43.9315C45.6634 47.6412 37.3193 48.2845 30.0239 44.0297C26.6914 42.0845 24.0564 40.8005 21.4808 40.382C19.0086 39.979 16.4304 40.3562 13.1987 42.118C12.9753 42.2398 12.7301 42.3164 12.4771 42.3435C12.2241 42.3705 11.9682 42.3474 11.7242 42.2756C11.4801 42.2037 11.2525 42.0845 11.0545 41.9247C10.8565 41.7649 10.6919 41.5677 10.5701 41.3443C10.4483 41.1209 10.3717 40.8757 10.3447 40.6227C10.3177 40.3697 10.3408 40.1139 10.4126 39.8698C10.4844 39.6257 10.6037 39.3982 10.7634 39.2002C10.9232 39.0022 11.1204 38.8376 11.3438 38.7158C13.5681 37.5016 15.6554 36.786 17.6756 36.5019ZM24.9012 29.5088C23.9746 29.1971 23.0395 28.962 22.0957 28.8035C20.388 28.5231 18.6443 28.5458 16.9445 28.8707C15.1491 29.2117 13.2994 29.8963 11.3387 30.9632C10.8872 31.2095 10.552 31.6251 10.4069 32.1185C10.2618 32.612 10.3187 33.1428 10.565 33.5943C10.8113 34.0458 11.2269 34.381 11.7203 34.5261C12.2137 34.6712 12.7446 34.6143 13.1961 34.368C16.4253 32.6036 19.0034 32.229 21.4757 32.6295C22.1904 32.7483 22.9189 32.9317 23.6612 33.1797C25.578 33.8178 27.6163 34.877 30.0162 36.2771L30.4863 36.5432C37.668 40.5035 45.7693 39.8111 50.8508 36.1815C51.2604 35.8798 51.535 35.4291 51.6151 34.9267C51.6952 34.4243 51.5746 33.9105 51.2791 33.4963C50.9836 33.0821 50.5371 32.8008 50.036 32.713C49.5348 32.6253 49.0193 32.7382 48.6007 33.0273C47.5415 33.7816 46.2757 34.381 44.86 34.784C42.07 35.577 38.7168 35.5874 35.3585 34.4662C34.1807 34.0714 33.0466 33.5564 31.9743 32.9291C29.5615 31.5238 27.2468 30.2941 24.9012 29.5088ZM45.2708 31.3765C45.2708 31.5574 45.2673 31.7382 45.2604 31.919C42.1372 33.1797 37.6034 33.2236 33.2738 30.6971C29.8896 28.7235 26.3582 26.879 22.509 26.2538C20.9238 25.9936 19.3101 25.9553 17.7143 26.1401C18.9345 23.0489 21.1948 20.4801 24.1057 18.8765C27.0165 17.2728 30.3956 16.7349 33.6605 17.3552C36.9255 17.9756 39.8717 19.7154 41.9916 22.2749C44.1114 24.8344 45.2694 28.0532 45.2708 31.3765ZM31.3156 57.2099C31.1 57.2443 30.8802 57.2443 30.6646 57.2099H31.3156ZM15.4333 13.1382L15.2163 12.9522C14.8233 12.6602 14.3344 12.5277 13.8478 12.5814C13.3611 12.6352 12.9129 12.8712 12.5932 13.2419C12.2735 13.6127 12.106 14.0908 12.1244 14.58C12.1427 15.0693 12.3457 15.5334 12.6923 15.8791L15.4307 18.62L15.6503 18.8086C16.0434 19.1051 16.5347 19.2409 17.0242 19.1882C17.5138 19.1355 17.965 18.8984 18.286 18.5251C18.6071 18.1517 18.7739 17.6701 18.7527 17.1782C18.7314 16.6862 18.5237 16.2208 18.1716 15.8765L15.4333 13.1382ZM49.4738 15.6621C49.7623 15.2689 49.8918 14.7814 49.8366 14.2969C49.7815 13.8124 49.5456 13.3665 49.1761 13.0482C48.8066 12.7299 48.3308 12.5627 47.8434 12.5798C47.3561 12.597 46.8931 12.7973 46.5469 13.1408L43.806 15.8765L43.6174 16.0961C43.3252 16.4893 43.1927 16.9786 43.2467 17.4655C43.3007 17.9525 43.5372 18.4009 43.9085 18.7204C44.2798 19.04 44.7584 19.2071 45.248 19.188C45.7375 19.1689 46.2016 18.965 46.5469 18.6175L49.2853 15.8791L49.4738 15.6621ZM32.9198 7.18879C32.8529 6.70248 32.6039 6.25969 32.2231 5.94991C31.8423 5.64012 31.3581 5.48643 30.8684 5.51989C30.3786 5.55335 29.9198 5.77146 29.5847 6.13016C29.2496 6.48886 29.0631 6.9614 29.0629 7.45229V11.3273L29.081 11.5908C29.1479 12.0771 29.3969 12.5199 29.7777 12.8297C30.1585 13.1395 30.6427 13.2931 31.1325 13.2597C31.6222 13.2262 32.081 13.0081 32.4162 12.6494C32.7513 12.2907 32.9378 11.8182 32.9379 11.3273V7.45229L32.9198 7.18879ZM13.2013 49.868C16.433 48.1062 19.0112 47.729 21.4834 48.132C24.0564 48.5505 26.6966 49.837 30.0265 51.7797C37.3244 56.0345 45.6686 55.3912 50.8585 51.6815C51.072 51.5363 51.2544 51.3499 51.3948 51.1332C51.5352 50.9164 51.6309 50.6739 51.6762 50.4196C51.7216 50.1654 51.7156 49.9047 51.6588 49.6528C51.6019 49.4009 51.4952 49.163 51.3451 48.9529C51.1949 48.7428 51.0043 48.5648 50.7844 48.4295C50.5645 48.2941 50.3197 48.2041 50.0645 48.1647C49.8093 48.1253 49.5488 48.1373 49.2983 48.2C49.0478 48.2627 48.8124 48.3749 48.6058 48.5299C44.7567 51.2785 38.0684 51.9838 31.9795 48.4317C28.6186 46.4684 25.4437 44.8486 22.1034 44.3061C18.6598 43.7481 15.2188 44.3552 11.3464 46.4684C10.9139 46.7239 10.5975 47.1375 10.464 47.6218C10.3305 48.1062 10.3904 48.6235 10.6311 49.0645C10.8717 49.5055 11.2742 49.8359 11.7537 49.9858C12.2333 50.1357 12.7523 50.0935 13.2013 49.868Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4>Year-round travel weather</h4>
                    </div>
                </a>

                <a class="col-md-4 d-flex">
                    <div class="rdb-grid-item">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63"
                                fill="none">
                                <g clip-path="url(#clip0_820_2870)">
                                    <path
                                        d="M53.2863 4.00928L24.8777 41.4636L8.08203 24.68L0.332031 32.43L26.1613 58.2593L62.332 11.7593L53.2863 4.00928Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_820_2870">
                                        <rect width="62" height="62" fill="white"
                                            transform="translate(0.332031 0.376465)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h4>Clean and Secure</h4>
                    </div>
                </a>

                <a class="col-md-4 d-flex">
                    <div class="rdb-grid-item">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63"
                                fill="none">
                                <g clip-path="url(#clip0_811_2549)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5836 2.49335C32.2957 2.36242 31.9831 2.29468 31.6669 2.29468C31.3506 2.29468 31.038 2.36242 30.7501 2.49335L19.134 7.78106L31.658 13.4851L44.1909 7.77664L32.5836 2.49335ZM17.0526 25.2208V11.6959L29.4526 17.3424V32.2888L18.3413 27.2358C17.9544 27.0598 17.6264 26.7763 17.3963 26.419C17.1662 26.0617 17.0438 25.6457 17.0437 25.2208H17.0526ZM33.8811 54.9453V40.1539L45.6257 45.5036V60.4501L34.5277 55.3971C34.2853 55.2869 34.0692 55.1338 33.8811 54.9453ZM50.0543 60.4589V45.5036L62.4676 39.8528V53.3821C62.4674 53.807 62.345 54.223 62.115 54.5803C61.8849 54.9376 61.5568 55.2211 61.17 55.3971L50.0543 60.4589ZM29.4437 40.1539V54.9631C29.2595 55.1435 29.0452 55.2904 28.8104 55.3971L17.6947 60.4589V45.5036L29.4437 40.1539ZM13.2661 45.5036V60.4501L2.17257 55.3971C1.78573 55.2211 1.45769 54.9376 1.22761 54.5803C0.997524 54.223 0.875118 53.807 0.875 53.3821V39.8572L13.275 45.5036H13.2661ZM33.8723 32.2976V17.3379L46.2856 11.6871V25.2208C46.2854 25.6457 46.163 26.0617 45.933 26.419C45.7029 26.7763 45.3748 27.0598 44.988 27.2358L33.8723 32.2976ZM46.9277 30.6591C47.2156 30.5281 47.5282 30.4604 47.8444 30.4604C48.1607 30.4604 48.4733 30.5281 48.7611 30.6591L60.364 35.9379L47.8311 41.6463L35.3204 35.9379L46.9321 30.6502L46.9277 30.6591ZM14.5726 30.6591C14.8604 30.5281 15.173 30.4604 15.4893 30.4604C15.8055 30.4604 16.1181 30.5281 16.406 30.6591L28.0089 35.9379L15.4804 41.6508L2.96086 35.9379L14.5726 30.6591Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_811_2549">
                                        <rect width="62" height="62" fill="white"
                                            transform="translate(0.666016 0.376465)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h4>Rich Culture & Heritage</h4>
                    </div>
                </a>



                <a class="col-md-4 d-flex">
                    <div class="rdb-grid-item">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="63" viewBox="0 0 62 63"
                                fill="none">
                                <path
                                    d="M15.4993 54.9262V52.3428H29.7077V40.1211H23.2493C20.3715 40.1211 17.9303 39.1179 15.9256 37.1115C13.9192 35.1068 12.916 32.6656 12.916 29.7878C12.916 27.5024 13.66 25.4788 15.148 23.7169C16.6343 21.9585 18.4504 20.6169 20.5963 19.6921C20.951 16.2976 22.0713 13.6867 23.9572 11.8594C25.843 10.0322 28.1904 9.11937 30.9993 9.1211C33.8083 9.12282 36.1557 10.0356 38.0415 11.8594C39.9273 13.6833 41.0477 16.2942 41.4024 19.6921C43.581 20.5498 45.4066 21.8759 46.8791 23.6704C48.3482 25.4615 49.0827 27.5007 49.0827 29.7878C49.0827 32.6639 48.0803 35.1051 46.0757 37.1115C44.0676 39.1179 41.6255 40.1211 38.7493 40.1211H32.291V52.3403H46.4993V54.9236L15.4993 54.9262Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4>Adventure & Nature Combined</h4>
                    </div>
                </a>
                <a class="col-md-4 d-flex">
                    <div class="rdb-grid-item">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63"
                                fill="none">
                                <g clip-path="url(#clip0_820_2863)">
                                    <path
                                        d="M57.7389 41.1104L57.1576 38.2041H50.6631L49.6298 41.0897L44.4244 41.1C47.7706 33.059 50.2541 27.1027 51.8747 23.2311C52.2984 22.2184 53.0501 21.7018 54.1584 21.7095C55.0057 21.7164 56.3886 21.7173 58.3072 21.7121L62.332 41.1026L57.7389 41.1104ZM52.1227 34.2232H56.3103L54.7474 26.9382L52.1227 34.2232ZM18.5755 21.7069L23.8094 21.7121L15.7184 41.1129L10.4199 41.1078C9.08759 35.9833 7.77181 30.8545 6.47261 25.7214C6.21428 24.6984 5.70278 23.9829 4.71853 23.6444C3.83848 23.3431 2.37631 22.8772 0.332031 22.2469V21.7121H8.69428C10.1409 21.7121 10.9857 22.4122 11.2569 23.8485C11.5308 25.2883 12.2197 28.9515 13.3236 34.838L18.5755 21.7069ZM31.0014 21.7121L26.8654 41.1104L21.8822 41.1026L26.0104 21.7069L31.0014 21.7121ZM41.1022 21.353C42.5928 21.353 44.4709 21.818 45.5507 22.2469L44.6775 26.2665C43.701 25.8739 42.0942 25.3443 40.7431 25.3624C38.7798 25.3959 37.5656 26.22 37.5656 27.0105C37.5656 28.297 39.6736 28.9454 41.8436 30.3508C44.3184 31.9524 44.6465 33.3914 44.6155 34.9569C44.5819 38.1989 41.8436 41.3997 36.0673 41.3997C33.4323 41.3609 32.4816 41.1414 30.3323 40.3767L31.2416 36.1814C33.4297 37.0959 34.3571 37.3878 36.2274 37.3878C37.9402 37.3878 39.4101 36.6954 39.423 35.489C39.4334 34.6314 38.9064 34.2051 36.9844 33.1459C35.0624 32.0868 32.3654 30.6169 32.4015 27.6641C32.4454 23.8873 36.0234 21.353 41.1022 21.353Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_820_2863">
                                        <rect width="62" height="62" fill="white"
                                            transform="translate(0.332031 0.376465)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h4>Visa Free For All Africans</h4>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- What You Can Experience -->
    <section class="vr-experiences">
        <div class="container">
            <div class="section-title">
                <h2 class="subheading">What You Can Experience</h2>
                <div class="heading">Unforgettable Experiences Await</div>
            </div>
            <div class="rdb-grid-items">
                <a href="#" class="rdb-grid-item">
                    <h4>
                        Wildlife & Nature
                    </h4>
                </a>
                <a href="#" class="rdb-grid-item">
                    <h4>
                        Culture & Heritage
                    </h4>
                </a>
                <a href="#" class="rdb-grid-item">
                    <h4>
                        City Life & Relaxation
                    </h4>
                </a>
                <a href="#" class="rdb-grid-item">
                    <h4>
                        Eco & Adventure Travel
                    </h4>
                </a>
                <a href="#" class="rdb-grid-item">
                    <h4>
                        Film & Production
                    </h4>
                </a>
            </div>
        </div>
    </section>

    <section class="vr-essentials">
        <div class="container">
            <div class="section-img"></div>
            <div class="section-content">
                <div class="section-title">
                    <h2 class="subheading">Travel Essentials</h2>
                    <div class="heading">Everything You Need to Know</div>
                </div>
                <div class="rdb-accordion">
                    <div class="accordion-items">
                        <div class="accordion-item">
                            <div class="ac-heading">
                                Visa on arrival info
                                <span class="chevron">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M6 8L10 12L14 8" stroke="#222" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="ac-content">...</div>
                        </div>
                        <div class="accordion-item">
                            <div class="ac-heading">
                                Local currency and connectivity
                                <span class="chevron">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M6 8L10 12L14 8" stroke="#222" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="ac-content">...</div>
                        </div>
                        <div class="accordion-item">
                            <div class="ac-heading">
                                Health &amp; safety guidelines
                                <span class="chevron">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M6 8L10 12L14 8" stroke="#222" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="ac-content">...</div>
                        </div>
                        <div class="accordion-item">
                            <div class="ac-heading">
                                Getting around
                                <span class="chevron">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M6 8L10 12L14 8" stroke="#222" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="ac-content">...</div>
                        </div>
                    </div>
                </div>

                <a href="#" class="rdb-btn">Visit Travel Guide</a>
            </div>
        </div>
    </section>

    <!-- CTA Page Breaker -->
    <section class="vr-cta-hero">
        <div class="container">
            <img src="./assets/img/vr-web-screen.png" alt="">
            <div class="vr-hero-contents">
                <div class="section-title">
                    <h2 class="heading">Want to Explore More?</h2>
                </div>
                <p class="hero-descr">
                    Visit the Official Tourism Platform to access detailed itineraries, travel inspiration, permits,
                    events, and bookings.
                </p>
                <a href="#" class="rdb-btn">Go to VisitRwanda.com</a>
            </div>
        </div>
    </section>

    <section class="vr-options">
        <div class="container">
            <div class="section-title">
                <h2 class="subheading">Incentive Travel Options</h2>
                <div class="heading">Where Every Moment <br />Becomes a Memory</div>
            </div>
            <div class="rdb-grid-items">
                <a href="#" class="rdb-grid-item">
                    <img src="./assets/img/vr-img4.webp" alt="">
                    <h4>Discover Wildlife</h4>
                </a>
                <a href="#" class="rdb-grid-item">
                    <img src="./assets/img/vr-img3.webp" alt="">
                    <h4>Explore Culture</h4>
                </a>
                <a href="#" class="rdb-grid-item">
                    <img src="./assets/img/vr-img2.webp" alt="">
                    <h4>Plan Your Visit</h4>
                </a>
            </div>
        </div>
    </section>

    <?php require_once './assets/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Your custom carousel logic -->
    <script src="./assets/js/home-script.js?v=<?= intval(time()); ?>"></script>

</body>

</html>