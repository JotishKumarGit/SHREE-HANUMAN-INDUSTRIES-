<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>SHREE HANUMAN INDUSTRIES </title>
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


<!-- collections -->
 
<style>
    .collection-title {
        text-align: center;
        color: #1e60aa;
        font-weight: 700;
        margin-bottom: 40px;
        font-size: 32px;
    }
    .collection-card {
        border-radius: 10px;
        overflow: hidden;
        transition: 0.4s;
        border: 2px solid #1e60aa20;
    }
    .collection-card:hover {
        transform: translateY(-8px);
        box-shadow: 0px 8px 20px rgba(30,96,170,0.3);
    }
    .collection-card img {
        width: 100%;
        height: 230px;
        object-fit: contain;
        background: #f7faff;
        padding: 10px;
    }
    .collection-name {
        text-align: center;
        padding: 12px;
        background: #1e60aa;
        color: white;
        font-size: 15px;
        font-weight: 600;
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <!-- Left Section -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-secondary text-uppercase">Get In Touch</h6>
          <h1 class="mb-4">Contact For Any Query</h1>
          <p class="mb-4">
            Have questions about our products, your order, or anything else?
            We're here to help! Reach out to us anytime and our support team
            will get back to you as soon as possible.
          </p>
          <iframe class="position-relative w-100"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3765.39408933507!2d72.858413774258!3d19.30869824462801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sB-2%2C%20Room%20No.%203%2C%20Gopinath%20Complex%2C%20Saraswati%20Nagar%2C%20Gurudwara%20Road%2C%20Navghar%20Rd%2C%20Maharashtra%2C%20India%20401105!5e0!3m2!1sen!2sin!4v1760420760282!5m2!1sen!2sin"
            frameborder="0" style="height: 300px; border: 0" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>

        <!-- Right Section (Form) -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="bg-light p-5 h-100 d-flex align-items-center">
            <form id="contactForm">
              <div class="row g-3">
                <div class="col-12 col-sm-6">
                  <input type="text" id="name" class="form-control border-0" placeholder="Your Name"
                    style="height: 55px" required />
                </div>
                <div class="col-12 col-sm-6">
                  <input type="email" id="email" class="form-control border-0" placeholder="Your Email"
                    style="height: 55px" required />
                </div>
                <div class="col-12">
                  <input type="text" id="subject" class="form-control border-0" placeholder="Subject"
                    style="height: 55px" />
                </div>
                <div class="col-12">
                  <textarea id="message" class="form-control border-0" placeholder="Special Request"
                    style="height: 120px" required></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Enquiry Now
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

    <!-- Footer -->
     <?php include('footer.php') ?>