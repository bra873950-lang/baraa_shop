<?php
$siteEmail   = "baabaa.2@gmail.com";
$sitePhone   = "+972592153326";
$pageTitle   = "Baraa Shop - About Page";
$copyrightYear = date("Y"); // لجلب السنة الحالية تلقائياً

$services = [
    ['icon' => 'fa-truck', 'title' => 'Delivery Services'],
    ['icon' => 'fa-exchange-alt', 'title' => 'Shipping & Return'],
    ['icon' => 'fa-percent', 'title' => 'Promotion'],
    ['icon' => 'fa-user', 'title' => '24 Hours Service']
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/small.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:<?php echo $siteEmail; ?>"><?php echo $siteEmail; ?></a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:<?php echo $sitePhone; ?>"><?php echo $sitePhone; ?></a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                Baraa
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
                </div>
        </div>
    </nav>

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>About Us</h1>
                    <p>
                        نحن في متجر براء نسعى لتقديم تجربة تسوق فريدة في غزة. نوفر لكم تشكيلة واسعة من الملابس والأحذية الرياضية بجودة استثنائية.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.svg" alt="About Hero">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Services</h1>
                <p>خدماتنا المتميزة لراحتكم</p>
            </div>
        </div>
        <div class="row">
            <?php foreach($services as $service): ?>
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa <?php echo $service['icon']; ?> fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center"><?php echo $service['title']; ?></h2>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Baraa Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><i class="fas fa-map-marker-alt fa-fw"></i> Palestine - Gaza - AlRemall</li>
                        <li><i class="fa fa-phone fa-fw"></i> <a class="text-decoration-none" href="tel:<?php echo $sitePhone; ?>"><?php echo $sitePhone; ?></a></li>
                        <li><i class="fa fa-envelope fa-fw"></i> <a class="text-decoration-none" href="mailto:<?php echo $siteEmail; ?>"><?php echo $siteEmail; ?></a></li>
                    </ul>
                </div>
                </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; <?php echo $copyrightYear; ?> Baraa Store
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>