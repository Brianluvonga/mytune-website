<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formility</title>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="new.css" />

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h4 class="logo me-auto me-lg-0"><a href="index.php">Beatify</a></h4>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link" href="#about-section">About</a></li>
                    <li><a class="nav-link" href="#features-section">Features</a></li>
                    <li><a class="nav-link " href="#subscribe-section">Subscribe</a></li>
                    <li><a class="nav-link" href="#feed">Feedback</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1 class="hero-title">Welcome to Beatify</h1>
                    <p class="subheadline" style="font-size: 18px">Music Beyond Entertaiment</p>
                    <div class="typing-container">
                        <h2 id="typingText" class="typing-text" style="font-size: 15px">
                            <span class="cursor">|</span>
                        </h2>

                    </div>
                    <br>
                    <a href="#about-section" class="btn" style="text-align: center; background-color: #022c4ef5; color: wheat">Learn More</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->



    <!-- About Section -->
    <div id="about-section" class="about-section py-5">
        <div class="container">
            <h2 class="mb-5 section-title">Beatify at a Glance</h2>
            <div class="row">
                <!-- Brief Intro -->
                <div class="col-lg-4 mb-4">
                    <div class="about-part">
                        <h2 class="about-title text-primary mb-3">Brief Intro</h2>
                        <p class="about-text">
                            Beatify is a revolutionary music platform that redefines the way you experience music.
                        </p>
                    </div>
                </div>
                <!-- Why We Exist -->
                <div class="col-lg-4 mb-4">
                    <div class="about-part">
                        <h2 class="about-title text-success mb-3">Why Beatify</h2>
                        <p class="about-text">
                            Entertainment is vital to beat boredorm, Beatify wants to revolutionise the way we get & personalise our music.
                        </p>
                        <p>Save the hustle of having to listen to a jam before downloading or saving it manually.</p>
                    </div>
                </div>
                <!-- Challenge -->
                <div class="col-lg-4 mb-4">
                    <div class="about-part">
                        <h2 class="about-title text-warning mb-3">The Challenge</h2>
                        <p class="about-text">
                            Our challenge is to make music discovery easy and enjoyable for everyone, from casual listeners to music connoisseurs.
                        </p>
                        <p>
                            This will be achieved through customised music listening habits as per users favourite and preferred music genres
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features-section" class="features-section">
        <div class="container">
            <h2 class="section-title">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-list">
                        <ul id="feature-names" class="list-group">
                            <!-- Feature names will be populated dynamically by JavaScript -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 bg-light">
                    <div id="feature-details" class="row">
                        <!-- Feature details will be populated dynamically by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Subscribe Section -->
    <div class="sub-section" id="subscribe-section">
        <div class="sub-container container">
            <h2 class="sub-heading">Subscribe</h2>
            <p class="sub-text">Subscribe to our newsletter to receive the latest updates regarding our app.</p>
            <form class="sub-form" action="server.php" method="POST">
                <div class="sub-form-group row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <input type="email" class="sub-input form-control" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <button type="submit" class="sub-button btn btn-primary btn-block">Subscribe</button>
                    </div>
                </div>
            </form>
            <div class="sub-message"></div>
        </div>
    </div>

    <!-- footer section -->
    <footer class="footer-section">
        <div class="container text-center p-3">
            <p>&copy; 2024 Beatify. All rights reserved.</p>
        </div>
    </footer>
    <!-- end of footer -->



    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="custom.js"></script>

</body>

</html>