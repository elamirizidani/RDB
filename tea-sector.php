<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/fa-styles.css?v=<?=intval(time());?>">
    <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="./assets/css/icon-styles.css">
    <!-- <link rel="stylesheet" href="./assets/css/style.css?v=<?=intval(time());?>"> -->
</head>

<body>
    <!-- Header & Topbar -->
    <?php require_once './assets/header.php';?>
    <!--sub header-->
    <div class="header-contain-fa">
        <div class="container">
            <div class="header-title-fa">
                <h2>Tea Exporters</h2>
            </div>
        </div>
    </div>
    <!--Herosection-->
    <div class="hero-section">
        <div class="container">
            <img src="./assets/img/tea.webp" alt="">

        </div>
    </div>

    <!--hero-content-->
    <div class="hero-content">
        <div class="container">
            <div class="row ">
                <div class="col-12 Overview-conents">
                    <p>Tea production increased steadily over the past decades from 5,910 tons of made tea in 1980 to
                        40,003 tons by June 2024.
                        This production is a result of processed green leaf of which about 65% of is supplied by tea
                        farmers (smallholders) while the remaining 35% is supplied from Industrial Blocs.Tea generated
                        USD 114.8 million from the export sales of 38,467.7 tons of made tea in the year 2023/2024.About
                        97.3% of tea exports are exported in raw form; 80% of this is sold in Auctions, 17.3% directly
                        and 2.7% locally.
                        The high performance of Tea sector is the result of Government and private efforts including:
                        Tea expansion program
                        Increased Tea green leaf prices and Farmers takehome
                        Efficient fertilizer application
                        Organization of tea farmers and exporters
                        Tea farmers and pluckers trainings
                        Tea cooperatives and factories strong partnership</p>
                </div>
            </div>
        </div>
    </div>
    <!--Investment Opportunities section-->

    <div class="col-md-12">
        <div class="container">
            <h2 style="color: #006AB2;">Tea Exporters</h2>

            <div class="row g-0 justify-content-between">
                <div class="col-md-6">
                    <div class="px-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Company Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>RWACOF EXPORTS LTD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="px-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Company Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>RWACOF EXPORTS LTD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="pagination-section">
                <div class="page-btn nav-btn">❮</div>
                <div class="page-btn active">1</div>
                <div class="page-btn">2</div>
                <div class="page-btn">3</div>
                <div class="page-btn nav-btn">❯</div>
            </div>

        </div>
    </div>
    </div>
    <?php require_once './assets/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>