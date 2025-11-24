<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wipro Magic Iron</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        .service-item-top .overflow-hidden {
            height: 300px;
        }

        .service-item-top img {
            height: 100%;
            object-fit: cover;
        }

        .page-header {
            background-color: #f8f9fa;
            padding: 60px 0;
            text-align: center;
        }

        .page-header h1 {
            color: #d35400;
            font-weight: 700;
        }

        .breadcrumb {
            background: transparent;
            justify-content: center;
            padding: 0;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Wipro Magic Iron</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wipro Magic Iron</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Single Product Page -->
    <div class="container-fluid py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Product Image -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="img/Wipro_magic_Iron.webp" class="img-fluid rounded shadow-sm" alt="Wipro Magic Iron">
                </div>

                <!-- Product Details -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="mb-3" style="color: #d35400;">Wipro Magic Iron</h2>
                    <p class="text-muted">
                        Upgrade your ironing experience with the Wipro Magic Iron. Lightweight yet powerful, this iron
                        ensures smooth, wrinkle-free clothes in no time. Equipped with advanced temperature control and
                        a non-stick soleplate, it delivers consistent heat for all fabric types while being
                        energy-efficient. Perfect for home use, it combines convenience, performance, and safety in one
                        compact design.
                    </p>

                    <ul class="list-unstyled">
                        <li>✅ Lightweight and easy to handle</li>
                        <li>✅ Non-stick soleplate for smooth ironing</li>
                        <li>✅ Adjustable temperature control for all fabrics</li>
                        <li>✅ Energy-efficient and reliable</li>
                        <li>✅ Ideal for home and personal use</li>
                    </ul>

                    <!-- Enquiry Button -->
                    <button class="btn btn-warning mt-3 shadow" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal">Enquiry Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Page -->

    <!-- Footer -->
    <?php include('footer.php'); ?>
