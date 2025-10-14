<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Falhaar</title>
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

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        .service-item-top .overflow-hidden {
            height: 300px;
        }

        .service-item-top img {
            height: 100%;
            object-fit: cover;
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

    <?php include('header.php') ?>

    <!-- Single page  -->
    <div class="container-fluid py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="img/makhana_pro_2.webp" class="img-fluid rounded shadow-sm" alt="Tandoori Makhana">
                </div>

                <!-- Text -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="mb-3" style="color: #d35400;">Peri-Peri Makhana</h2>
                    <p class="text-muted">
                        Turn up the heat with our Peri-Peri Makhana — a bold and spicy twist on the classic fox nut
                        snack. Roasted to perfection and coated with a fiery peri-peri seasoning, these makhanas deliver
                        the perfect crunch with every bite. Packed with protein, low in calories, and completely free
                        from artificial additives, it’s the ideal healthy snack for spice lovers who want to snack
                        smart.
                    </p>

                    <ul class="list-unstyled">
                        <li>✅ Rich in protein and fiber for lasting energy</li>
                        <li>✅ Infused with authentic peri-peri spices</li>
                        <li>✅ Ideal for keto, vegan, and gluten-free diets</li>
                        <li>✅ No preservatives, no cholesterol, no trans fat</li>
                        <li>✅ Perfect for snacking at home, office, or on the go</li>
                    </ul>

                    <button class="btn btn-warning mt-3 shadow" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Enquire Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End single page -->


    <?php include('footer.php') ?>