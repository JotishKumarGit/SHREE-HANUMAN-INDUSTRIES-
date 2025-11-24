<style>
  /* Border for navbar */
  .navbar {
    border-bottom: 1px solid #ddd;
  }

  /* Offcanvas styling */
  .offcanvas {
    border-left: 1px solid #ccc;
  }

  /* Hover effect for links */
  .submenu-link {
    color: #333;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
  }

  .submenu-link:hover {
    padding-left: 5px;
    color: #007bff;
  }

  /* Submenu slide toggle animation (optional JS needed for toggling) */
  .submenu {
    transition: max-height 0.3s ease;
    overflow: hidden;
  }

  /* Button toggle indicator */
  .toggle-submenu i {
    transition: transform 0.3s ease;
  }

  /* Rotate icon when submenu is open */
  .toggle-submenu.open i {
    transform: rotate(180deg);
  }
</style>

  <!-- Topbar -->
  <div class="topbar">
    <div class="contact-info">
      <span><i class="fa fa-envelope me-1"></i> example@gmail.com</span>
      <span><i class="fa fa-phone me-1"></i> +91 9029421251</span>
    </div>
    <div class="social-icons">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>
  <!-- Topbar end -->

  <!-- STICKY NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top px-3 py-2 border-bottom">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand fw-bold d-flex justify-content-center align-items-center" href="index.php">
        <h1 class="text-dark m-0" style="font-size: 18px; font-weight: bold;">
          SHREE HANUMAN INDUSTRIES
        </h1>

        <!-- <img src="img/falhaar_logo.jpeg" height="50px" width="100%" alt="" /> -->
      </a>

      <!-- Right Side Icons -->
      <div class="d-flex align-items-center ms-auto gap-3">
        <button class="btn border-0 d-lg-block d-md-block d-sm-block" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasMenu">
          <i class="fa fa-bars fs-5 text-dark"></i>
        </button>
      </div>
    </div>
  </nav>
  <!-- End navbar -->

  <!-- OFFCANVAS MENU -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div> 
    <div class="offcanvas-body"> 
      <ul class="list-unstyled ps-1">
        <li>  
          <a href="index.php" class="d-block py-2 submenu-link">Home</a>
        </li>
        <li>
          <a href="about.php" class="d-block py-2 submenu-link">About</a>
        </li>
        <li>
          <a href="service.php" class="d-block py-2 submenu-link">Services</a>
        </li>
        <li>
          <a href="contact.php" class="d-block py-2 submenu-link">Contact</a>
        </li>
        <li>
          <a href="product.php" class="d-block py-2 submenu-link">Products</a>
        </li>
      </ul>
    </div>
  </div>
