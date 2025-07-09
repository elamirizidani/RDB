<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
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
           <h1 class="hero-title">Keep Up With<br>Rwanda's Momentum.</h1>
        </div>
    </div>
    <!-- Main Content -->
     
    <div class="container">
        <!-- Category Navigation -->
        <div class="row category-tabs">
            <div class="col-lg-8">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Investment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events & Conferences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Success Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trade & Export</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="search-container">
                    <input type="text" class="form-control search-input" placeholder="Enter your keywords...">
                    <button class="btn search-btn">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div> 

        <!-- Articles Grid -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="article-card">
                    <div style="position: relative;">
                        <img src="./assets/img/news-1.webp" alt="Business Meeting" class="article-image">
                        <span class="category-badge">CATEGORY</span>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">Supervisor Disapproved Of Latest Work.</h3>
                        <p class="article-excerpt">Collaboratively disintermediate move to impactful compelling web.</p>
                        <a href="#" class="continue-reading">Continue Reading<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                <path d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z" fill="#009448" />
              </svg>
            </span></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="article-card">
                    <div style="position: relative;">
                        <img src="./assets/img/news-2.webp" alt="Conference Room" class="article-image">
                        <span class="category-badge">CATEGORY</span>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">Supervisor Disapproved Of Latest Work.</h3>
                        <p class="article-excerpt">Collaboratively disintermediate move to impactful compelling web.</p>
                        <a href="#" class="continue-reading">Continue Reading<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                <path d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z" fill="#009448" />
              </svg>
            </span></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="article-card">
                    <div style="position: relative;">
                        <img src="./assets/img/news-3.webp" alt="Team Photo" class="article-image">
                        <span class="category-badge">CATEGORY</span>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">Supervisor Disapproved Of Latest Work.</h3>
                        <p class="article-excerpt">Collaboratively disintermediate move to impactful compelling web.</p>
                        <a href="#" class="continue-reading">Continue Reading<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                <path d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z" fill="#009448" />
              </svg>
            </span></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="article-card">
                    <div style="position: relative;">
                        <img src="./assets/img/news-4.webp" alt="Investment Meeting" class="article-image">
                        <span class="category-badge">CATEGORY</span>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">Supervisor Disapproved Of Latest Work.</h3>
                        <p class="article-excerpt">Collaboratively disintermediate move to impactful compelling web.</p>
                        <a href="#" class="continue-reading">Continue Reading<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                <path d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z" fill="#009448" />
              </svg>
            </span></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="article-card">
                    <div style="position: relative;">
                        <img src="./assets/img/news-5.webp" alt="Infrastructure" class="article-image">
                        <span class="category-badge">CATEGORY</span>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">Supervisor Disapproved Of Latest Work.</h3>
                        <p class="article-excerpt">Collaboratively disintermediate move to impactful compelling web.</p>
                        <a href="#" class="continue-reading">Continue Reading<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                <path d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z" fill="#009448" />
              </svg>
            </span></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="article-card">
                    <div style="position: relative;">
                        <img src="./assets/img/news-6.webp" alt="Business Discussion" class="article-image">
                        <span class="category-badge">CATEGORY</span>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">Supervisor Disapproved Of Latest Work.</h3>
                        <p class="article-excerpt">Collaboratively disintermediate move to impactful compelling web.</p>
                        <a href="#" class="continue-reading">Continue Reading<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                <path d="M1.26666 13.88C1.26666 13.7022 1.32222 13.5578 1.43333 13.4466C1.54444 13.3355 1.68888 13.28 1.86666 13.28H16.6L12.6667 9.34665C12.5333 9.21331 12.4667 9.05776 12.4667 8.87998C12.4667 8.7022 12.5333 8.55776 12.6667 8.44665C12.8 8.33554 12.9556 8.27998 13.1333 8.27998C13.3111 8.27998 13.4667 8.32442 13.6 8.41331L18.6 13.4133C18.6889 13.5466 18.7333 13.7022 18.7333 13.88C18.7333 14.0578 18.6889 14.2133 18.6 14.3466L13.6 19.3466C13.4667 19.4355 13.3111 19.48 13.1333 19.48C12.9556 19.48 12.8 19.4244 12.6667 19.3133C12.5333 19.2022 12.4667 19.0578 12.4667 18.88C12.4667 18.7022 12.5333 18.5466 12.6667 18.4133L16.6 14.48H1.86666C1.68888 14.48 1.54444 14.4244 1.43333 14.3133C1.32222 14.2022 1.26666 14.0578 1.26666 13.88Z" fill="#009448" />
              </svg>
            </span></a>
                    </div>
                </div>
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
    </section>

    

     <?php require_once './assets/footer.php';?>


    <!-- bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous">
    </script>
        <script src="./assets/js/news.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Owl Carousel JS -->
    
</body>
</html>

