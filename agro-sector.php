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
                <h2>Agroprocessing Sector</h2>
            </div>
        </div>
    </div>
    <!--Herosection-->
    <div class="hero-section">
        <div class="container">
            <img src="./assets/img/inyanya.webp" alt="">

        </div>
    </div>

    <!--hero-content-->
    <div class="hero-content">
        <div class="container">
            <div class="row ">
                <div class="col-12 Overview-conents">
                    <p>Agro-processing in Rwanda is a flourishing sector that contributes up to a third of Rwanda’s GDP.

                        This sector is a major source of employment and income, thus providing access to food and other
                        necessities to large groups of the population.
                        Rwanda has suitable agro-climatic conditions that allow the production of a broad range of
                        diverse agricultural commodities suitable for processing.
                        Market access is facilitated by the existence of free trade areas and agreements at the regional
                        and continental level as well as other parts of the world.

                        The sector has seen the adoption of improved and validated food processing technologies,
                        enforcement of good quality standards, hygiene and regulatory instruments which have assisted
                        local agro-processing industries to compete favourably in the international market place.
                        The agro-processing sector consists of processing locally available raw materials to produce
                        products such as wine, beer, soft drinks, flour, rice, cheese, honey, cooking oil among others.
                        There is an increasing diversification to new innovative products such as Stevia and essential
                        oils which have increased the agro-processing export base.

                        Currently, most of the agro-processed products are mainly exported to Rwanda’s neighbouring
                        countries which include: Democratic Republic of Congo (DRC), Burundi, Uganda and Tanzania as
                        well as other international destinations such as United Arab Emirates (UAE) and Europe.

                        Rwanda is among the largest Pyrethrum exporters globally; the pyrethrum flower is used worldwide
                        to produce a natural insecticide that controls pests and plant diseases.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Investment Opportunities section-->

    <div class="col-md-12">
        <div class="container">
            <h2 style="color: #006AB2;">Agroprocessing Exporters</h2>

            <div class="row g-0 justify-content-between">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Product</th>
                                <th scope="col">Export to</th>
                                <th scope="col">Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Adma International</th>
                                <td>Riham Biscuit</td>
                                <td>DRC</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

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