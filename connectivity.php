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
            <h1 class="display-3 text-white animated slideInRight">Internet Connectivity</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Connectivity and Internet</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Connectivity / Internet Content Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="display-5">KM Connect Telecoms</h2>
          <h5 class="text-primary mb-3">FIBER, 5G, LTE, MICROWAVE & NETWORK INFRASTRUCTURE</h5>
          <p class="lead mx-auto" style="max-width:900px;">
            We deliver resilient, high‑performance internet and networking solutions tailored for businesses of every size.
            From fibre and microwave links to 5G/LTE wireless connectivity and full site networking infrastructure, KM Connect Telecoms
            designs, installs and supports the solutions that keep your operations online and productive.
          </p>
        </div>

        <div class="row g-5 align-items-center">
          <!-- Left: detailed content -->
          <div class="col-lg-7">
            <h3 class="mb-3">Our Connectivity Solutions</h3>

            <h5 class="mt-3">Fibre Optic & Leased Lines</h5>
            <p>Dedicated fibre delivers uncontended bandwidth and low latency for mission‑critical applications, VoIP, cloud services and data backups.</p>
            <ul>
              <li>Symmetric high speeds for upload/download</li>
              <li>Service Level Agreements (SLA) and monitoring</li>
              <li>Redundant routing and failover options</li>
              <li>Scalable bandwidth to grow with your business</li>
              <li>Professional installation and testing</li>
            </ul>

            <h5 class="mt-3">5G & LTE Wireless</h5>
            <p>Fast, flexible wireless connectivity ideal for remote sites, temporary deployments or as a resilient backup to fixed links.</p>
            <ul>
              <li>Rapid deployment where fixed lines are not available</li>
              <li>Carrier-grade SIM and managed data plans</li>
              <li>Low-latency profiles for business voice and apps</li>
              <li>Seamless failover between wired and wireless</li>
              <li>Managed security and SIM lifecycle support</li>
            </ul>

            <h5 class="mt-3">Microwave & Point-to-Point Links</h5>
            <p>Cost-effective and reliable line-of-sight links for inter-site connectivity, long-distance links and last-mile alternatives.</p>
            <ul>
              <li>High-throughput point-to-point links</li>
              <li>Quick site-to-site deployment with predictable performance</li>
              <li>Engineered for capacity and reliability</li>
              <li>Low operational costs versus leased lines in many scenarios</li>
              <li>Professional alignment and ongoing maintenance</li>
            </ul>

            <h5 class="mt-3">Networking Infrastructure</h5>
            <p>Design and deployment of LAN, Wi‑Fi, switching, routing and secure perimeter networking to support modern business needs.</p>
            <ul>
              <li>Structured cabling and rack build services</li>
              <li>Managed switches, VLANs and QoS for voice/data segregation</li>
              <li>Enterprise Wi‑Fi design and site surveys</li>
              <li>Firewalling, VPNs and secure remote access</li>
              <li>Monitoring, support and lifecycle management</li>
            </ul>

            <p class="mt-3">
              Why choose KM Connect Telecoms for connectivity? We combine telecom carrier partnerships with local engineering expertise to
              deliver reliable, secure and cost‑effective connectivity solutions. From initial site survey to SLA-backed support, we ensure
              your network performs when it matters.
            </p>

            <div class="mt-4">
              <a href="#" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#quoteModal">Request A Quote</a>
              <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#callModal">Log A Call</a>
            </div>
          </div>

          <!-- Right: image + quick highlights -->
          <div class="col-lg-5">
            <img src="img/images/wrack.jpg" alt="Connectivity" class="img-fluid rounded shadow mb-4">
            <div class="row g-3">
              <div class="col-12 d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                  <i class="fa fa-fiber-simple text-white"></i>
                </div>
                <div>
                  <h5 class="mb-1">Guaranteed Bandwidth</h5>
                  <small>Leased lines and SLAs to protect your critical services.</small>
                </div>
              </div>

              <div class="col-12 d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                  <i class="fa fa-signal text-white"></i>
                </div>
                <div>
                  <h5 class="mb-1">Wireless Failover</h5>
                  <small>Automatic 5G/LTE fallback to keep services online.</small>
                </div>
              </div>

              <div class="col-12 d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                  <i class="fa fa-network-wired text-white"></i>
                </div>
                <div>
                  <h5 class="mb-1">Enterprise Networking</h5>
                  <small>Secure switching, routing and Wi‑Fi to support the business.</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Connectivity / Internet Content End -->

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