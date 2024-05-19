<!DOCTYPE html>
<html lang="en">

<head>
    <title>Farmers Cloud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <!--navigation start-->

    <!-- first navigation bar -->
    <nav class="navbar navbar-expand-md bg-success navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse gap-5 justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav d-grid gap-3 d-md-flex">

                    <button type="button" class="btn btn-danger btn-sm shadow-lg bold-text">
                        <a href="login.php" style="text-decoration: none; color: white;">LOGIN</a>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm shadow-lg bold-text me-5">
                        <a href="registration.php" style="text-decoration: none; color: white;">REGISTER</a>
                    </button>
                </ul>
            </div>
        </div>
    </nav>

    <!-- second navigation bar -->
    <nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top">
        <a class="navbar-brand text-dark bold-text ms-5" href="#">FARMER'S CLOUD</a>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav gap-5">
                <ul class="navbar-nav d-grid gap-3 d-md-flex">
                    <a href="booking.php" class="btn btn-outline-danger btn-sm shadow-lg bold-text ">BOOKING PRODUCT</a>
                    <a href="product.php" class="btn btn-outline-danger btn-sm shadow-lg bold-text ">SELL PRODUCT</a>
                    <a href="request.php" class="btn btn-outline-danger btn-sm shadow-lg bold-text ">REQUEST PRODUCT</a>
                </ul>
                <li class="nav-item">
                    <a class="nav-link text-success shadow-lg bold-text active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success shadow-lg bold-text" href="market.php ">Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success shadow-lg bold-text me-5" href="buyer_req.php">Buyer Requests</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigations ends-->
    <br>
</body>
</html>