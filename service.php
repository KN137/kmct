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
                    <span class="fs-5 fw-bold">010 010 7470</span>
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
<<<<<<< HEAD
            <a href="quote.php" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
=======
            <a href="#" class="btn btn-primary px-3 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#quoteModal">Get A Quote</a>
>>>>>>> 594eff8a51d5128564ceb1f4a18b30e9cf773e9c
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
                <h1 class="display-5 mb-4">We Provide Best IT Services</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/kmslide_phones.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/kmslide_phones.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">TELECOMS | VOIP | PBX</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Reliable VOIP systems with crystal-clear calls and flexible features.
Stay connected with cost-effective telecom solutions that grow with your business.</p>
                            </div>
                        </div>
                        <a class="btn btn-light read-more-btn" href="#" data-service="voip" data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/kmslide_4.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/kmslide_4.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Internet connections & Infrastructure</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Fast, stable internet with tailored network design and cabling solutions.
We keep your business online, secure, and always connected.</p>
                            </div>
                        </div>
                        <a class="btn btn-light read-more-btn" href="#" data-service="internet" data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/kmslide_8.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/kmslide_8.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">IT Services & Support</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Expert IT support to keep your systems running smoothly and securely.
From setup to troubleshooting, we’ve got your business covered.</p>
                            </div>
                        </div>
                        <a class="btn btn-light read-more-btn" href="#" data-service="it" data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/kmslide_cctv.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/kmslide_cctv.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Survailance (CCTV & Intercoms)</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Protect your workplace with smart CCTV and intercom systems.
We design, install, and maintain security solutions you can trust.</p>
                            </div>
                        </div>
                        <a class="btn btn-light read-more-btn" href="#" data-service="cctv" data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/kmslide_printer.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/kmslide_printer.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Printers (Office & Production Printers)</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Office and production printers that deliver performance and efficiency.
We supply, install, and support printers for all business needs.</p>
                            </div>
                        </div>
                        <a class="btn btn-light read-more-btn" href="#" data-service="printers" data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/kmslide_ups.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/kmslide_ups.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Alternative Power Solutions</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Keep your business running with reliable UPS systems and generators.
Uninterrupted power solutions designed to handle outages with ease.</p>
                            </div>
                        </div>
                        <a class="btn btn-light read-more-btn" href="#" data-service="power" data-bs-toggle="modal" data-bs-target="#serviceModal">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Partners Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Our Partners</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/MiroLogo.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/Avaya_logo.webp">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/axxess_logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/Uniview_logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/yealink_logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/Yeastar_Logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/EvenFlow_logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/Hikvision_logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/CipherWave_logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/Grandstream_Logo.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/partners/Konica_Minolta_logo.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>    
                </div>                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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
    <a href="mailto:info@kmtelecomsa.com" class="text-white">info@kmtelecomsa.com</a>
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
const serviceDescriptions = {
  voip: `
    Reliable VOIP systems with crystal-clear calls and flexible features. Stay connected with cost-effective telecom solutions that grow with your business.<br><br>
    <strong>Benefits:</strong>
    <ul>
      <li>Crystal-clear call quality</li>
      <li>Scalable solutions for any business size</li>
      <li>Advanced PBX features and call management</li>
      <li>Cost-effective monthly plans</li>
      <li>Easy integration with existing infrastructure</li>
    </ul>
    <strong>Why choose us?</strong><br>
    We offer expert installation, ongoing support, and tailored solutions to fit your business needs. Trust KMCT for reliable communication and dedicated customer service.
  `,
  internet: `
    Fast, stable internet with tailored network design and cabling solutions. We keep your business online, secure, and always connected.<br><br>
    <strong>Benefits:</strong>
    <ul>
      <li>High-speed, reliable connectivity</li>
      <li>Custom network design for your premises</li>
      <li>Secure and protected data transmission</li>
      <li>Professional cabling and installation</li>
      <li>24/7 technical support</li>
    </ul>
    <strong>Why choose us?</strong><br>
    Our team ensures seamless setup and proactive monitoring, so your business stays online. Experience hassle-free internet with KMCT’s expert support.
  `,
  it: `
    Expert IT support to keep your systems running smoothly and securely. From setup to troubleshooting, we’ve got your business covered.<br><br>
    <strong>Benefits:</strong>
    <ul>
      <li>Comprehensive IT management</li>
      <li>Rapid response to technical issues</li>
      <li>Proactive system monitoring</li>
      <li>Cybersecurity and data protection</li>
      <li>Flexible support plans</li>
    </ul>
    <strong>Why choose us?</strong><br>
    KMCT’s certified technicians deliver reliable IT solutions and personalized service. Let us handle your IT, so you can focus on your business.
  `,
  cctv: `
    Protect your workplace with smart CCTV and intercom systems. We design, install, and maintain security solutions you can trust.<br><br>
    <strong>Benefits:</strong>
    <ul>
      <li>High-definition video surveillance</li>
      <li>Remote monitoring and alerts</li>
      <li>Integrated intercom systems</li>
      <li>Professional installation and setup</li>
      <li>Ongoing maintenance and support</li>
    </ul>
    <strong>Why choose us?</strong><br>
    Choose KMCT for advanced security technology and expert advice. Safeguard your assets with our trusted surveillance solutions.
  `,
  printers: `
    Office and production printers that deliver performance and efficiency. We supply, install, and support printers for all business needs.<br><br>
    <strong>Benefits:</strong>
    <ul>
      <li>Wide range of printer options</li>
      <li>Fast and reliable printing</li>
      <li>Professional installation and setup</li>
      <li>Affordable maintenance plans</li>
      <li>Expert troubleshooting and repairs</li>
    </ul>
    <strong>Why choose us?</strong><br>
    KMCT provides quality printers and responsive support, ensuring your office runs smoothly. Rely on us for all your printing needs.
  `,
  power: `
    Keep your business running with reliable UPS systems and generators. Uninterrupted power solutions designed to handle outages with ease.<br><br>
    <strong>Benefits:</strong>
    <ul>
      <li>Continuous power during outages</li>
      <li>Custom UPS and generator solutions</li>
      <li>Professional installation and testing</li>
      <li>Regular maintenance and servicing</li>
      <li>Expert advice on energy efficiency</li>
    </ul>
    <strong>Why choose us?</strong><br>
    With KMCT, you get peace of mind and reliable backup power. Let us protect your business from unexpected interruptions.
  `
};

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