<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icon-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="assets/css/bruce-styles.css?v=<?= intval(time()); ?>">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?=intval(time());?>">
</head>

<body>
    <?php require_once './assets/header.php';?>
    <div class="header">
        <div class="container">
            <h1 class="header-title">Multimedia from<br>RDB Activities</h1>
        </div>
    </div>
    <!-- NAVIGATION MEDIA -->
    <nav class="navigation">
        <div class="container">
            <div class="nav-content">
                <div class="nav-tabs">

                    <button class="nav-tab active">All</button>
                    <button class="nav-tab">Investment</button>
                    <button class="nav-tab">Events & Conferences</button>
                    <button class="nav-tab">Success Stories</button>
                    <button class="nav-tab">Trade & Export</button>
                </div>
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Enter your keywords...">
                    <button class="search-button">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 21L16.514 16.506L21 21ZM19 10.5C19 15.194 15.194 19 10.5 19C5.806 19 2 15.194 2 10.5C2 5.806 5.806 2 10.5 2C15.194 2 19 5.806 19 10.5Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <div class="photo-grid">
                <!-- Row 1: Two large photos -->
                <div class="photo-item">
                    <img src="./assets/img/media-1.webp" alt="Business meeting">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-2.webp" alt="Business handshake">
                </div>

                <!-- Row 2: Four small photos -->
                <div class="photo-item">
                    <img src="./assets/img/media-3.webp" alt="Conference">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-4.webp" alt="Meeting">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-5.webp" alt="Conference room">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-6.webp" alt="Business discussion">
                </div>

                <!-- Row 3: Three medium photos + one -->
                <div class="photo-item">
                    <img src="./assets/img/media-7.webp" alt="Team meeting">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-8.webp" alt="Business presentation">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-9.webp" alt="Office meeting">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-10.webp" alt="Executive meeting">
                </div>

                <!-- Row 4: One large + one medium -->
                <div class="photo-item">
                    <img src="./assets/img/media-11.webp" alt="Conference hall">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-12.webp" alt="Business team">
                </div>

                <!-- Row 5: Two medium photos -->
                <div class="photo-item">
                    <img src="./assets/img/media-13.webp" alt="Board meeting">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-14.webp" alt="Business discussion">
                </div>

                <!-- Blue background photos -->
                <div class="photo-item">
                    <img src="./assets/img/news-4.webp" alt="Group photo">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/news-5.webp" alt="Team photo">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-17.webp" alt="Business group">
                </div>

                <div class="photo-item">
                    <img src="./assets/img/media-18.webp" alt="Award ceremony">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-19.webp" alt="Ceremony">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-20.webp" alt="Recognition">
                </div>

                <div class="photo-item">
                    <img src="./assets/img/media-11.webp" alt="Official photo">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-12.webp" alt="Delegation">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/news-6.webp" alt="Summit">
                </div>
                <div class="photo-item">
                    <img src="./assets/img/media-15.webp" alt="Large group photo">
                </div>
            </div>


            <!-- Pagination -->
            <div class="pagination-section">
                <div class="page-btn nav-btn">❮</div>
                <div class="page-btn active">1</div>
                <div class="page-btn">2</div>
                <div class="page-btn">3</div>
                <div class="page-btn nav-btn">❯</div>
            </div>
        </div>
    </main>


    <?php require_once './assets/footer.php';?>


    <!-- bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Owl Carousel JS -->
</body>

</html>