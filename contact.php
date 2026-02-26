<?php
$conn = mysqli_connect("localhost", "root", "", "baraa_shop");

$siteEmail = "baabaa.2@gmail.com";
$sitePhone = "+972592153326";
$pageTitle = "Baraa Shop - Contact Us";

$messageSent = false;
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_contact'])) {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        $messageSent = true; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1" href="index.php">Baraa</a>
            <ul class="nav navbar-nav mx-lg-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" action="contact.php">
                
                <?php if($messageSent): ?>
                    <div class="alert alert-success">
                        تم حفظ رسالتك في قاعدة البيانات بنجاح يا <strong><?php echo $name; ?></strong>!
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject">
                </div>
                <div class="mb-3">
                    <label>Message</label>
                    <textarea class="form-control" name="message" rows="8" required></textarea>
                </div>
                <div class="text-end">
                    <button type="submit" name="submit_contact" class="btn btn-success btn-lg">Let's Talk</button>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>