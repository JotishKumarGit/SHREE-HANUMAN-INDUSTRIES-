<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wipro Radiant Dual Light LED Torch</title>
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
            <h1>Wipro Radiant Dual Light LED Torch</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wipro Radiant Dual Light LED Torch</li>
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
                    <img src="img/Wipro_Radiant_Dual_Light_LED_Torch.webp" class="img-fluid rounded shadow-sm"
                        alt="Wipro Radiant Dual Light LED Torch">
                </div>

                <!-- Product Details -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="mb-3" style="color: #d35400;">Wipro Radiant Dual Light LED Torch</h2>
                    <p class="text-muted">
                        Illuminate your surroundings efficiently with the Wipro Radiant Dual Light LED Torch. Featuring
                        dual LED lights for focused and wide coverage, this torch offers long-lasting brightness with
                        minimal power consumption. Compact, durable, and easy to carry, it’s perfect for outdoor activities,
                        emergencies, and everyday use.
                    </p>

                    <ul class="list-unstyled">
                        <li>✅ Dual LED lights for versatile illumination</li>
                        <li>✅ Long-lasting and energy-efficient</li>
                        <li>✅ Compact and lightweight design</li>
                        <li>✅ Durable construction for everyday use</li>
                        <li>✅ Ideal for home, camping, and emergency purposes</li>
                    </ul>

                    <!-- Enquiry Button -->
                    <button class="btn btn-warning mt-3 shadow" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal">Enquiry Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Page -->

    <!-- Enquiry Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3"
                                placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Enquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Enquiry Modal -->

    <!-- Footer -->
    <?php include('footer.php'); ?>