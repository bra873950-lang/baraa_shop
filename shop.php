<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "baraa_shop");
if (!$conn) { die("Connection failed"); }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Baraa Shop - Product Listing Page</title>
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
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:baabaa.2@gmail.com">baabaa.2@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+972592153326">+972592153326</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
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

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">
                            <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0'; ?>
                        </span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="profile.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="shop.php" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="search" placeholder="Search for products...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content -->
    <div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Gender <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="shop.php?gender=men">Men</a></li>
                        <li><a class="text-decoration-none" href="shop.php?gender=women">Women</a></li>
                    </ul>
                </li>
                </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="shop.php">All</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="d-flex">
                        <select class="form-control" onchange="location = this.value;">
                            <option value="shop.php?sort=featured">Featured</option>
                            <option value="shop.php?sort=az">A to Z</option>
                            <option value="shop.php?sort=price_low">Price: Low to High</option>
                        </select>
                    </div>
                </div>
            </div>

           <div class="row">
    <?php
    // 1. استقبال الفلاتر والبحث من الرابط
    $gender = isset($_GET['gender']) ? mysqli_real_escape_string($conn, $_GET['gender']) : '';
    $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
    $sort   = isset($_GET['sort']) ? $_GET['sort'] : '';

    // 2. بناء الاستعلام الأساسي
    $sql = "SELECT * FROM products WHERE 1=1";

    // إضافة شرط البحث إذا وجد
    if ($search != '') {
        $sql .= " AND product_name LIKE '%$search%'";
    }

    // إضافة شرط الفلترة بالنوع (Men/Women)
    if ($gender != '') {
        $sql .= " AND category_name = '$gender'";
    }

    // إضافة الترتيب (اختياري)
    if ($sort == 'az') { $sql .= " ORDER BY product_name ASC"; }
    elseif ($sort == 'price_low') { $sql .= " ORDER BY product_price ASC"; }

    // تنفيذ الاستعلام
    $result = mysqli_query($conn, $sql);

    // 3. عرض النتائج باستخدام حلقة while بدلاً من foreach الثابتة
    if (mysqli_num_rows($result) > 0) {
        while ($product = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-md-4">
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <img class="card-img rounded-0 img-fluid" src="assets/img/<?php echo $product['product_image']; ?>">
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white" href="shop-single.php?id=<?php echo $product['id']; ?>"><i class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $product['id']; ?>"><i class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white mt-2" href="cart.php?add=<?php echo $product['id']; ?>"><i class="fas fa-cart-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <a href="shop-single.php?id=<?php echo $product['id']; ?>" class="h3 text-decoration-none"><?php echo $product['product_name']; ?></a>
                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                    <li class="pt-2">
                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    </li>
                </ul>
                <p class="text-center mb-0">$<?php echo $product['product_price']; ?></p>
            </div>
        </div>
    </div>
    <?php 
        } 
    } else {
        echo "<div class='col-12 text-center'><p class='alert alert-info'>No products found.</p></div>";
    }
    ?>
</div>
                foreach ($products as $product): 
                ?>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="assets/img/<?php echo $product['img']; ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href="shop-single.php?id=<?php echo $product['id']; ?>"><i class="far fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $product['id']; ?>"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="cart.php?add=<?php echo $product['id']; ?>"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.php?id=<?php echo $product['id']; ?>" class="h3 text-decoration-none"><?php echo $product['name']; ?></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li><?php echo $product['sizes']; ?></li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$<?php echo $product['price']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
    <!-- End Content -->

    <!-- Start Brands -->
   <?php
$brands = ['brand_01.png', 'brand_02.png', 'brand_03.png', 'brand_04.png'];
?>

<section class="bg-light py-5">
    <div class="container my-4">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Brands</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-9 m-auto tempaltemo-carousel">
                <div class="row d-flex flex-row">
                    <div class="col-1 align-self-center">
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-light fas fa-chevron-left"></i>
                        </a>
                    </div>

                    <div class="col">
                        <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                            <div class="carousel-inner product-links-wap" role="listbox">
                                
                                <?php for ($i = 0; $i < 3; $i++): ?>
                                <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                                    <div class="row">
                                        <?php foreach ($brands as $brand): ?>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/<?php echo $brand; ?>" alt="Brand Logo"></a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endfor; ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-1 align-self-center">
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                            <i class="text-light fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--End Brands-->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Baraa Shop</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><i class="fas fa-map-marker-alt fa-fw"></i> Palestine - Gaza - AlRemall</li>
                    <li><i class="fa fa-phone fa-fw"></i> <a class="text-decoration-none" href="tel:+972592153326">+972592153326</a></li>
                    <li><i class="fa fa-envelope fa-fw"></i> <a class="text-decoration-none" href="mailto:baabaa.2@gmail.com">baabaa.2@gmail.com</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <?php
                    $products = ["Luxury", "Sport Wear", "Men's Shoes", "Women's Shoes", "Popular Dress", "Gym Accessories", "Sport Shoes"];
                    foreach ($products as $product) {
                        echo "<li><a class='text-decoration-none' href='#'>$product</a></li>";
                    }
                    ?>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <?php
                    $info_links = ["Home", "About Us", "Shop Locations", "FAQs", "Contact"];
                    foreach ($info_links as $link) {
                        echo "<li><a class='text-decoration-none' href='#'>$link</a></li>";
                    }
                    ?>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <?php
                    $socials = ['facebook-f' => 'facebook.com', 'instagram' => 'instagram.com', 'twitter' => 'twitter.com', 'linkedin' => 'linkedin.com'];
                    foreach ($socials as $icon => $url): ?>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://<?php echo $url; ?>/"><i class="fab fa-<?php echo $icon; ?> fa-lg fa-fw"></i></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="subscribeEmail">Email address</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                    <div class="input-group-text btn-success text-light">Subscribe</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; <?php echo date("Y"); ?> Baraa Store
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>