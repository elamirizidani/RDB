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
                <h2>Manufacturing sector</h2>
            </div>
        </div>
    </div>
    <!--Herosection-->
    <div class="hero-section">
        <div class="container">
            <img src="./assets/img/manifucture.webp" alt="">

        </div>
    </div>

    <!--hero-content-->
    <div class="hero-content">
        <div class="container">
            <div class="row ">
                <div class="col-12 Overview-conents">
                    <p>Rwanda’s industry sector continues to grow. In 2023, the sector contributed 22 % to the country’s
                        GDP.
                        Manufacturing grew by 10% during this period. The sector is characterized by gradual
                        diversification from basic manufacturing to more value-adding

                        activities in other sub-sectors that include:

                        Fast-moving consumer goods such as detergents, body care products, paper tissues, plastic goods,
                        papers, chemicals, beverages, textiles, leather and footwear and cosmetics;
                        Construction materials such as granite tiles, cement, roofing sheets and tiles and steel bars
                        and light items;
                        Furniture Laboratory Equipment and;
                        Electronic & Automotive manufactured goods such as phones, computers and vehicle-assembly.

                        The economy is heavily dependent on the growing sector as primarily and fully manufactured
                        exports from Rwanda have found a big market in the EAC region due to their high quality and
                        strategic positioning of the country.
                        Although Rwanda’s liberalized economy has exposed locally manufactured products to stiff
                        competition from imports, compliance with required international standards gives them an upper
                        hand.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Investment Opportunities section-->

    <div class="col-md-12">
        <div class="container">
            <h2 style="color: #006AB2;">Manufacturing sector</h2>

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