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
            <h1 class="display-3 text-white animated slideInRight">IT SUPPORT & Cybersecurity</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">office automation</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Office IT / Software & Network Content Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="display-5">KM Connect Telecoms</h2>
          <h5 class="text-primary mb-3">SOFTWARE SOLUTIONS, BACKUP SERVERS, ACCESS POINTS & LOCAL NETWORK MANAGEMENT</h5>
          <p class="lead mx-auto" style="max-width:900px;">
            We provide end-to-end office IT solutions — from enterprise software deployments and local network management to resilient backup servers and professional Wi‑Fi access point installations.
            Our services keep your business systems available, secure and optimised for productivity.
          </p>
        </div>

        <div class="row g-5 align-items-center">
          <!-- Left: detailed content -->
          <div class="col-lg-7">
            <h3 class="mb-3">Office IT & Software Services</h3>

            <h5 class="mt-3">Software Solutions</h5>
            <p>Implementation, customisation and support for business software — productivity suites, accounting/ERP, CRM and specialist telephony integrations.</p>
            <ul>
              <li>Consultation and requirements mapping</li>
              <li>Deployment and user training</li>
              <li>Integration with telephony and VoIP systems</li>
              <li>Licensing management and upgrades</li>
              <li>Ongoing support and maintenance</li>
            </ul>

            <h5 class="mt-3">Backup Servers & Data Protection</h5>
            <p>Design and supply of on‑premise and hybrid backup servers with scheduled replication and restore testing to protect critical business data.</p>
            <ul>
              <li>Automated backups with versioning and retention</li>
              <li>Offsite replication and cloud-tier options</li>
              <li>Encryption at rest and in transit</li>
              <li>Disaster recovery planning and failover testing</li>
              <li>Regular restore verification to ensure integrity</li>
            </ul>

            <h5 class="mt-3">Access Points & Wi‑Fi</h5>
            <p>Enterprise Wi‑Fi design, site surveys and managed access point deployments that deliver reliable coverage and capacity for staff and guests.</p>
            <ul>
              <li>Site surveys and RF planning</li>
              <li>Controller-based or cloud-managed APs</li>
              <li>Guest portals, captive portals and QoS for voice</li>
              <li>Security: WPA3, VLAN segmentation and monitoring</li>
              <li>Scalable designs for multi-floor / multi-site setups</li>
            </ul>

            <h5 class="mt-3">Local Network Management</h5>
            <p>Structured cabling, switching, routing and proactive monitoring to ensure your LAN runs smoothly and securely.</p>
            <ul>
              <li>VLANs, QoS and traffic shaping for critical apps</li>
              <li>24/7 monitoring with alerting and incident response</li>
              <li>Patch management and firmware lifecycle services</li>
              <li>Performance tuning and capacity planning</li>
              <li>On-site maintenance and remote troubleshooting</li>
            </ul>

            <p class="mt-3">
              KM Connect Telecoms combines local technical expertise with trusted vendor partnerships to deliver secure, resilient and cost-effective IT infrastructure. From planning to support, we ensure your office technology enables business continuity and growth.
            </p>

            <div class="mt-4">
              <a href="#" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#quoteModal">Request A Quote</a>
              <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#callModal">Log A Call</a>
            </div>
          </div>

          <!-- Right: image + highlights -->
          <div class="col-lg-5">
            <img src="img/images/wrack_servers.jpg" alt="Office IT & Networking" class="img-fluid rounded shadow mb-4">
            <div class="row g-3">
              <div class="col-12 d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                  <i class="fa fa-server text-white"></i>
                </div>
                <div>
                  <h5 class="mb-1">Resilient Backups</h5>
                  <small>Automated, encrypted backups with tested restores.</small>
                </div>
              </div>

              <div class="col-12 d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                  <i class="fa fa-wifi text-white"></i>
                </div>
                <div>
                  <h5 class="mb-1">Professional Wi‑Fi</h5>
                  <small>Site-survey driven access point deployments for full coverage.</small>
                </div>
              </div>

              <div class="col-12 d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                  <i class="fa fa-network-wired text-white"></i>
                </div>
                <div>
                  <h5 class="mb-1">Managed Networks</h5>
                  <small>Proactive monitoring, VLANs and QoS for reliable operations.</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Office IT / Software & Network Content End -->

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