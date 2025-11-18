<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KMCT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php include 'quote-modal.php'; ?>
<?php include 'call-modal.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <a href="tel:0100107470" class="fs-5 fw-bold text-white">010 010 7470</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="index.html" class="navbar-brand ps-5 me-0">
            <h1 class="text-white m-0">KM Connect Telecoms</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link active">Services</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary px-3 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#callModal">Log A Call</a>
            <a href="#" class="btn btn-primary px-3 d-none d-lg-block ms-2" data-bs-toggle="modal" data-bs-target="#quoteModal">Request A Quote</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Printer Machines</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Printers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Printers Catalog Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="display-5">Printer Machines</h2>
          <p class="lead mx-auto" style="max-width:900px;">
            High-performance office and production printers from leading brands. Browse models and request a quote or read more about each machine.
          </p>
        </div>

        <!-- 16-card grid -->
        <div class="row g-4">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer1.jpg" class="card-img-top" alt="Printer 1" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 1</h5>
                <p class="card-text small text-muted">Fast monochrome printer for small offices.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 1" data-desc="Full spec and details for Printer Model 1." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer2.jpg" class="card-img-top" alt="Printer 2" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 2</h5>
                <p class="card-text small text-muted">Colour multifunction printer with duplex scanning.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 2" data-desc="Full spec and details for Printer Model 2." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer3.jpg" class="card-img-top" alt="Printer 3" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 3</h5>
                <p class="card-text small text-muted">High-volume A3 printer for production environments.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 3" data-desc="Full spec and details for Printer Model 3." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer4.jpg" class="card-img-top" alt="Printer 4" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 4</h5>
                <p class="card-text small text-muted">Compact colour printer for desk use.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 4" data-desc="Full spec and details for Printer Model 4." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer5.jpg" class="card-img-top" alt="Printer 5" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 5</h5>
                <p class="card-text small text-muted">Affordable A4 laser with low running costs.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 5" data-desc="Full spec and details for Printer Model 5." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer6.jpg" class="card-img-top" alt="Printer 6" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 6</h5>
                <p class="card-text small text-muted">Robust monochrome device for heavy daily use.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 6" data-desc="Full spec and details for Printer Model 6." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer7.jpg" class="card-img-top" alt="Printer 7" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 7</h5>
                <p class="card-text small text-muted">Multifunction device with scanning and fax.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 7" data-desc="Full spec and details for Printer Model 7." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer8.jpg" class="card-img-top" alt="Printer 8" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 8</h5>
                <p class="card-text small text-muted">High-yield office printer with paper trays.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 8" data-desc="Full spec and details for Printer Model 8." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer9.jpg" class="card-img-top" alt="Printer 9" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 9</h5>
                <p class="card-text small text-muted">Economical multifunction printer for SMBs.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 9" data-desc="Full spec and details for Printer Model 9." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer10.jpg" class="card-img-top" alt="Printer 10" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 10</h5>
                <p class="card-text small text-muted">Fast colour printer for high-quality output.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 10" data-desc="Full spec and details for Printer Model 10." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer11.jpg" class="card-img-top" alt="Printer 11" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 11</h5>
                <p class="card-text small text-muted">Durable printer for production and heavy use.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 11" data-desc="Full spec and details for Printer Model 11." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer12.jpg" class="card-img-top" alt="Printer 12" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 12</h5>
                <p class="card-text small text-muted">Smart printer with cloud printing features.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 12" data-desc="Full spec and details for Printer Model 12." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer13.jpg" class="card-img-top" alt="Printer 13" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 13</h5>
                <p class="card-text small text-muted">High-capacity tray and low maintenance design.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 13" data-desc="Full spec and details for Printer Model 13." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer14.jpg" class="card-img-top" alt="Printer 14" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 14</h5>
                <p class="card-text small text-muted">Eco-friendly model with energy-saving features.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 14" data-desc="Full spec and details for Printer Model 14." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer15.jpg" class="card-img-top" alt="Printer 15" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 15</h5>
                <p class="card-text small text-muted">High-speed duplex printing for busy offices.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 15" data-desc="Full spec and details for Printer Model 15." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="img/printer16.jpg" class="card-img-top" alt="Printer 16" onerror="this.src='img/printer-placeholder.png'">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Printer Model 16</h5>
                <p class="card-text small text-muted">Production-grade printer with finishing options.</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="#" class="btn btn-sm btn-outline-primary read-more-btn" data-title="Printer Model 16" data-desc="Full spec and details for Printer Model 16." data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Printers Catalog End -->

    <script>
    // attach read-more handlers for cards (sets modal content)
    document.querySelectorAll('.read-more-btn').forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        var title = btn.getAttribute('data-title') || 'Printer';
        var desc = btn.getAttribute('data-desc') || 'Details coming soon.';
        var label = document.getElementById('serviceModalLabel');
        var body = document.getElementById('serviceModalBody');
        if (label) label.textContent = title;
        if (body) body.innerHTML = '<p>' + desc + '</p><p><strong>Features:</strong></p><ul><li>High-speed printing</li><li>Low running cost</li><li>Network & USB connectivity</li><li>Professional maintenance plans</li></ul>';
      });
    });
    </script>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2">
    <i class="fa fa-map-marker-alt me-3"></i>
    <a href="https://www.google.com/maps?q=263+Oak+Ave,+Randburg,+Gauteng" target="_blank" class="text-white">
        263 Oak Ave, Randburg, Gauteng
    </a>
</p>
                    <p class="mb-2">
    <i class="fa fa-phone-alt me-3"></i>
    <a href="tel:0100107470" class="text-white">010 010 7470</a>
</p>
                    <p class="mb-2">
    <i class="fa fa-envelope me-3"></i>
    <a href="mailto:info@kmtelecomsa.co.za" class="text-white">info@kmtelecomsa.co.za</a>
</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="service.php">Our Services</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">08:30 am - 04:30 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">Closed</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Sign-up to see our promo deals and specials.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">KM Connect Telecoms</a>, All Right Reserved.</p>
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Service Details Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3">
      <div class="modal-header">
        <h5 class="modal-title" id="serviceModalLabel">Service Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="serviceModalBody">
        <!-- Service description will be injected here -->
      </div>
    </div>
  </div>
</div>
<script>

document.querySelectorAll('.read-more-btn').forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const key = btn.getAttribute('data-service');
    document.getElementById('serviceModalLabel').textContent = btn.closest('.service-item').querySelector('.service-title h3').textContent;
    document.getElementById('serviceModalBody').innerHTML = serviceDescriptions[key] || "Service details not available.";
  });
});
</script>
</body>

</html>