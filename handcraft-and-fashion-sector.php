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
                <h2>Handcraft and fashion sector</h2>
            </div>
        </div>
    </div>
    <!--Herosection-->
    <div class="hero-section">
        <div class="container">
            <img src="./assets/img/handcraft.webp" alt="">

        </div>
    </div>

    <!--hero-content-->
    <div class="hero-content">
        <div class="container">
            <div class="row ">
                <div class="col-12 Overview-conents">
                    <p>Handicraft sector is a small but growing sector in Rwanda.
                        The country boasts of a very rich cultural heritage and handicrafts are very unique and have an
                        originality of their own.
                        They are available on a variety of online sites and from the local markets as well.
                        Rwandans make an extensive range of handicrafts which include: wood products; ceramics and
                        pottery; hand textiles and hand-loomed products; embroidery and woven products and Basketry and
                        Mats.

                        On the other hand, the fashion and creative industries in Rwanda are largely made up of
                        clothing, footwear, and jewelry products. The Rwandan fashion industry is growing as the
                        consumers’ demand for new styles is expanding</p>
                </div>
            </div>
        </div>
    </div>
    <!--Investment Opportunities section-->

    <div class="col-md-12">
        <div class="container">
            <h2 style="color: #006AB2;">Handcraft and fashion sector</h2>

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