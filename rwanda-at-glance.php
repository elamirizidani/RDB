<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/reusables.css?v=<?=intval(time());?>">
    <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?=intval(time());?>">
    <link rel="stylesheet" href="assets/css/icon-styles.css?v=<?= intval(time()); ?>">

    <title>Rwanda At Glance</title>
</head>

<body>
    <!-- Header & Topbar -->
    <?php require_once './assets/header.php';?>
    <section class="container-fluid rwanda-at-glance-hero">
        <div class="rwanda-at-glance-bg-video">
            <video src="./assets/vids/rwanda-at-glance-hero.mp4" autoplay muted loop type="video/mp4"></video>
        </div>
        <div class="container">

            <h1 class="rwanda-at-glance-hero-title">Everything You <br>Need to Know. </h1>
            <p class="rwanda-at-glance-hero-desc">Discover a nation of rapid progress, strong leadership, vibrant
                culture, and<br> opportunity—where innovation, safety, and sustainability shape the future.</p>
        </div>
    </section>

    <section class="container-fluid rwanda-at-glance-facts">
        <div class="container">
            <div class="rwanda-at-glance-facts-content d-flex justify-content-between align-items-center">
                <h2 class="rwanda-at-glance-facts-title">Key Facts About Rwanda</h2>
                <p class="rwanda-at-glance-facts-text">Get a quick view of Rwanda’s standout indicators—showcasing why
                    it’s a country built on progress and ready for investment.</p>
            </div>
            <div class="rwanda-at-glance-facts-table-1 mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">land size</th>
                            <th scope="col">population</th>
                            <th scope="col">time zone</th>
                            <th scope="col">currency</th>
                            <th scope="col">climate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>republic of rwanda</th>
                            <td>26,338</td>
                            <td>14.5 million</td>
                            <td>UTC +2 (Central Africa Time)</td>
                            <td>Rwandan Franc</td>
                            <td>21-27 degrees Celsius</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="rwanda-at-glance-facts-table-2 mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">peace & safety</th>
                            <th scope="col">business ranking</th>
                            <th scope="col">renewable energy</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2nd safest in Africa (Global Peace Index)</td>
                            <td>Top 2 in Africa for ease of doing business</td>
                            <td>60%+ electricity from clean sources</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="container-fluid rwanda-at-glance-comm">
        <div class="container">
            <h2 class="rwanda-at-glance-comm-title">Language & Communication</h2>
            <div class="row rwanda-at-glance-lang-display mt-4 g-0">
                <div class="col-md-3">
                    <div class="px-2">
                        <div class="rwanda-at-glance-lang">
                            <h4 class="rwanda-glance-lang-name">Kinyarwanda</h4>
                            <span class="rwanda-glance-lang-desc">Spoken by almost everyone</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="px-2">
                        <div class="rwanda-at-glance-lang">
                            <h4 class="rwanda-glance-lang-name">English</h4>
                            <span class="rwanda-glance-lang-desc">Widely used in cities and businesses</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="px-2">
                        <div class="rwanda-at-glance-lang">
                            <h4 class="rwanda-glance-lang-name">French</h4>
                            <span class="rwanda-glance-lang-desc">Still spoken, especially among older
                                generations</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="px-2">
                        <div class="rwanda-at-glance-lang">
                            <h4 class="rwanda-glance-lang-name">Swahili</h4>
                            <span class="rwanda-glance-lang-desc">Common in markets and regional travel</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section container-fluid rwanda-glance-fundamentals">
        <div class="container">
            <div class="rwanda-at-glance-fundamentals-headings d-flex flex-column align-items-center">
                <h5 class="rwanda-at-glance-fundamentals-title-1">Economic Performance</h5>
                <h2 class="rwanda-at-glance-fundamentals-title-2 text-center">Strong Growth.<br>Solid Fundamentals.</h2>
            </div>
            <div class="rwanda-at-glance-fundamentals-display mt-4">
                <div class="rdb-card-inset">
                    <h4 class="rdb-card-inset-title">8.9%</h4>
                    <span class="rdb-card-inset-desc">GDP Growth (2024)</span>
                </div>
                <div class="rdb-card-inset">
                    <h4 class="rdb-card-inset-title">$3.2B </h4>
                    <span class="rdb-card-inset-desc">Investment Commitments</span>
                </div>
                <div class="rdb-card-inset">
                    <h4 class="rdb-card-inset-title">$4.2B </h4>
                    <span class="rdb-card-inset-desc">Export Receipts</span>
                </div>
                <div class="rdb-card-inset">
                    <h4 class="rdb-card-inset-title">1,037 USD</h4>
                    <span class="rdb-card-inset-desc">GDP per Capita</span>
                </div>
                <div class="rdb-card-inset">
                    <h4 class="rdb-card-inset-title">51,635</h4>
                    <span class="rdb-card-inset-desc">Jobs Created</span>
                </div>
                <div class="rdb-card-inset">
                    <h4 class="rdb-card-inset-title">7.6%</h4>
                    <span class="rdb-card-inset-desc">Inflation Rate</span>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid rwanda-at-glance-unique">
        <div class="container">
            <div class="rwanda-at-glance-unique-content d-flex justify-content-between align-items-center">
                <h2 class="rwanda-at-glance-unique-title">What Makes Rwanda Unique</h2>
                <p class="rwanda-at-glance-unique-text">Rwanda is more than numbers—it’s a story of resilience, smart
                    governance, and a forward-thinking vision.</p>
            </div>
            <div class="row rwanda-at-glance-blog-display mt-4 g-0">
                <div class="col-md-4">
                    <div class="px-2">
                        <div class="rwanda-at-glance-blog-feature-img">
                            <img src="./assets/img/good-govern.webp" alt="">
                        </div>
                        <div class="rwanda-at-glance-blog-content">
                            <h5 class="rwanda-at-glance-blog-title">Good Governance</h5>
                            <span class="rwanda-at-glance-blog-excerpt">Transparent institutions, zero tolerance for
                                corruption, and efficient government services drive long-term stability and
                                trust.</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="px-2">
                        <div class="rwanda-at-glance-blog-feature-img">
                            <img src="./assets/img/WCC.webp" alt="">
                        </div>
                        <div class="rwanda-at-glance-blog-content">
                            <h5 class="rwanda-at-glance-blog-title">Sustainability & Clean Growth</h5>
                            <span class="rwanda-at-glance-blog-excerpt">From banning plastic bags to building green
                                cities, Rwanda is leading Africa in climate-conscious development.</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="px-2">
                        <div class="rwanda-at-glance-blog-feature-img">
                            <img src="./assets/img/sustainability.webp" alt="">
                        </div>
                        <div class="rwanda-at-glance-blog-content">
                            <h5 class="rwanda-at-glance-blog-title">Unity & Progress</h5>
                            <span class="rwanda-at-glance-blog-excerpt">Post-conflict transformation has created a
                                society focused on inclusion, innovation, and collective advancement.</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid rwanda-at-glance-workforce">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="px-2">
                        <h5 class="rwanda-at-glance-workforce-heading">Demographics & Talent</h5>
                        <h2 class="rwanda-at-glance-workforce-subheading">A Young, Educated,<br>Multilingual Workforce
                        </h2>
                        <p class="rwanda-at-glance-workforce-desc">Rwanda’s young, educated population offers long-term
                            labor force strength and inclusive leadership in both public and private sectors.</p>
                        <div class="rwanda-at-glance-workforce-stats-display">
                            <div class="rwanda-at-glance-workforce-stat d-flex gap-2">
                                <div class="rwanda-at-glance-stat-icon">
                                    <img src="./assets/img/counter-1.png" alt="">
                                </div>
                                <div class="rwanda-at-glance-stat-content">
                                    <h5 class="rwanda-at-glance-stat-title">13.8 million</h5>
                                    <span class="rwanda-at-glance-stat-desc">Population</span>
                                </div>
                            </div>
                            <div class="rwanda-at-glance-workforce-stat d-flex gap-2">
                                <div class="rwanda-at-glance-stat-icon">
                                    <img src="./assets/img/counter-2.png" alt="">
                                </div>
                                <div class="rwanda-at-glance-stat-content">
                                    <h5 class="rwanda-at-glance-stat-title">20 years +</h5>
                                    <span class="rwanda-at-glance-stat-desc">Median Age</span>
                                </div>
                            </div>
                            <div class="rwanda-at-glance-workforce-stat d-flex gap-2">
                                <div class="rwanda-at-glance-stat-icon">
                                    <img src="./assets/img/counter-3.png" alt="">
                                </div>
                                <div class="rwanda-at-glance-stat-content">
                                    <h5 class="rwanda-at-glance-stat-title">94,000+</h5>
                                    <span class="rwanda-at-glance-stat-desc">Annual University Graduates</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="px-2">
                        <div class="rwanda-at-glance-workforce-img">
                            <img src="./assets/img/workforce.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid rwanda-at-glance-flag d-flex align-items-center">
        <div class="container">
            <div class="rwanda-at-glance-flag-content d-flex flex-column align-items-end">
                <h4 class="rwanda-at-glance-flag-quote">“Rwanda’s story is one of resilience, innovation,<br> and
                    ambition. We are building a future with<br> everyone at the table”</h4>
                <span class="rwanda-at-glance-flag-author text-start">— President Paul Kagame</span>
            </div>
        </div>

    </section>

    <section class="container-fluid rwanda-at-glance-map">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-5">
                    <div class="px-2">
                        <div class="rwanda-at-glance-img">
                            <img src="./assets/img/line.png " alt="">
                        </div>
                    </div>

                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <div class="pe-2 ps-5">
                        <h3 class="rwanda-at-glance-map-title">Your Gateway to Africa’s Fastest-Growing Region</h3>
                        <p class="rwanda-at-glance-map-text mt-4">Located in the heart of Africa’s Great Lakes region,
                            Rwanda connects you to over 400 million people via the East African Community and African
                            Continental Free Trade Area (AfCFTA).</p>
                        <button class="rwanda-at-glance-map-btn mt-4">Open Visual Map</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php require_once './assets/footer.php';?>
</body>

</html>