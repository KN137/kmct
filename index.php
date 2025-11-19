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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary px-3 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#callModal">Log A Call</a>
            <a href="#" class="btn btn-primary px-3 d-none d-lg-block ms-2" data-bs-toggle="modal" data-bs-target="#quoteModal">Request A Quote</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/kmslide_2.jpg" alt="Fiber, LTE & 5G Connections">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Stay connected with our Fast and Reliable Internet</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">We offer Fiber, LTE & 5G CONNECTIONS.</h1>
                                    <a href="#" class="btn btn-primary py-3 px-5 explore-more-btn animated slideInRight" data-explore="fiber" data-bs-toggle="modal" data-bs-target="#exploreModal">Explore More</a>

                                    <div id="extra-content" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/kmslide_4.jpg" alt="Reliable ITC Solution">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Where experience meets Innovation</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Best Reliable ITC Solution</h1>
                                    <a href="#" class="btn btn-primary py-3 px-5 explore-more-btn animated slideInRight" data-explore="itc" data-bs-toggle="modal" data-bs-target="#exploreModal">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Slide 3 -->
                <div class="carousel-item">
                    <img class="w-100" src="img/kmslide_printer.jpg" alt="Printer image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Our offices and production Priters</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Tired of paper JAM? Try US.</h1>
                                    <a href="#" class="btn btn-primary py-3 px-5 explore-more-btn animated slideInRight" data-explore="printer" data-bs-toggle="modal" data-bs-target="#exploreModal">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Slide 4 -->
                <div class="carousel-item">
                    <img class="w-100" src="img/kmslide_phones.jpg" alt="Your Fourth Slide Alt Text">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">VOICE Solutions</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">local or International calls with Clear Quality. </h1>
                                    <a href="#" class="btn btn-primary py-3 px-5 explore-more-btn animated slideInRight" data-explore="voip" data-bs-toggle="modal" data-bs-target="#exploreModal">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- KM Connect Intro Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <h1 class="text-center mb-3">KM Connect Telecoms</h1>
            <h5 class="text-center text-primary mb-4"><strong>TELECOMMUNICATIONS SOLUTIONS IN JOHANNESBURG</strong></h5>
            <p>
                KM Connect Telecoms is an authorised supplier of a complete range of internationally recognized brands.
                As a leading business in the world of corporate office solutions, KM Connect Telecoms offers a complete
                spectrum of telephony solutions and information technology, including rentals, maintenance and repairs.
                We have a proven track record of success and aim to become nationwide leaders in reliable telephony
                equipment and service provision.
            </p>
            <p>
                The directing team at KM Connect Telecoms has an incredible wealth of experience and knowledge in sales,
                supply and servicing of all telephony and IT solutions. With over 100 collective years of experience between
                them, they are committed to delivering the very best. Their history in the market demonstrates a mutual past
                in directing some of the most influential telephony and IT brands in the country. By partnering with us you
                will ensure your business can benefit from their technical, consulting and skills‑developing expertise.
            </p>
        </div>
    </div>
    <!-- KM Connect Intro End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/kmslide_7.jpg">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/kmslide_8.jpg">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/kmslide_9.jpg">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/images/c650i_printer.webp">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="fw-medium text-uppercase text-primary mb-2">What we do best</h1>
                    <h1 class="display-5 mb-4">We Are Leaders In IT & Networking connections</h1>
                    <p class="mb-4">Our Expert team of technicians provide reliable, efficient, and prompt service to keep your business running smoothly.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">Top</h1>
                            <h5 class="text-white">Services</h5>
                            <h5 class="text-white">we Offer</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>TELECOMS | VOICE | PBX</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Internet connections & Infrastructure</p>
                            <p><i class="fa fa-check text-primary me-2"></i>IT Services & Support</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Survailance (CCTV & Intercoms)</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Office Automation</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Alternative Power Solutions</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email us</p>
                                    <h5 class="mb-0">
                                        <a href="mailto:info@kmtelecomsa.co.za" class="text-dark">info@kmtelecomsa.co.za</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <!-- Mission & Values Start -->
    <div class="container-xxl py-5 bg-light">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="display-5">OUR MISSION</h2>
          <h5 class="text-primary mb-3">Providing The Best Solutions</h5>
          <p class="lead mx-auto" style="max-width:900px;">
            We are tirelessly driven to deliver accurate and rapid service, without impacting our ability to develop valuable and productive relationships with our clients.
            Our capabilities of servicing and maintaining internationally recognized Telephony &amp; IT equipment is crucial in maintaining an efficient corporate office solution strategy,
            and whether it is a small office or a large multinational corporation we can provide the turnkey solution for you.
          </p>
        </div>

        <div class="row g-5 align-items-center">
          <!-- Values list styled like Features (LEFT) -->
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <h3 class="mb-4">OUR VALUES</h3>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Open and honest</h4>
                <span>We communicate transparently and act with integrity in every engagement, building trust with clients and partners.</span>
              </div>
            </div>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Customer-centric</h4>
                <span>We prioritise customer needs and deliver tailored solutions that drive real business value and satisfaction.</span>
              </div>
            </div>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Innovative</h4>
                <span>We embrace new technologies and creative problem-solving to continuously improve our services and offerings.</span>
              </div>
            </div>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Passionate</h4>
                <span>Our team is committed and driven to exceed expectations, delivering with energy and dedication.</span>
              </div>
            </div>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Inclusive</h4>
                <span>We respect diverse perspectives and design solutions that are accessible and effective for everyone.</span>
              </div>
            </div>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Collaborative</h4>
                <span>We work closely with clients and partners to deliver integrated, end-to-end solutions.</span>
              </div>
            </div>

            <div class="d-flex">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4">
                <h4>Accountable</h4>
                <span>We take responsibility for our work and ensure reliable follow-through and measurable results.</span>
              </div>
            </div>
          </div>

          <!-- Image (RIGHT) -->
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <img class="img-fluid" src="img/kmslide_cctv.jpg" alt="KM Connect" />
            
            <div class="d-flex">
              <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                <i class="fa fa-check text-white"></i>
              </div>
              <div class="ms-4" padding="70px">
                <h4>Fairness</h4>
                <span>We treat our clients without partiality and with decency.</span>
              </div>
            </div>

            <img class="img-fluid" src="img/kmslide_ups.jpg" alt="KM Connect" />
          </div>
        </div>
      </div>
    </div>
    <!-- Mission & Values End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/images/wrack_servers.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Why Choose Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choose Us!</h1>
                    <p class="mb-4">Our team of professionals provides relaible, effiecient and prompt service to keep your business running smoothly.</p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Experienced Workers</h4>
                                    <span>Our technicians are experienced and equiped with the latest ITC skills to make sure your bussiness' needs are covered.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Reliable Services</h4>
                                    <span>We make sure our technicians are always available for support and remote calls to reduce any down-time.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>IT Customer Support</h4>
                                    <span>Reliable and efficient IT support at any given moment.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Add block start -->
    <div class="container-xxl py-5 bg-white">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="display-5">~ Rethink Voice & ICT Solutions ~</h2>
          <h5 class="text-primary mb-3">ADVANCED TELECOMS & IT OFFICE SOLUTIONS FOR YOUR BUSINESS</h5>
          <p class="mx-auto" style="max-width:900px;">
            As a leading business in the world of corporate office solutions, KM Connect Telecoms offers a complete spectrum of internationally recognised Telephony solutions and Information Technology brands, including rentals, maintenance and repairs. Our highly trained staff know how to work with you to provide you with the best possible equipment and solutions. From Telephony and IT equipment for your office to comprehensive software solutions – KM Connect Telecoms delivers the equipment and service that every business in South Africa can benefit from:
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-3">
            <div class="service-item text-center p-4 border h-100">
              <h5 class="mb-3">TELECOMS | VOICE | PBX</h5>
              <p>Scalable telephony platforms, SIP trunking and PBX solutions for any business size.</p>
              <a class="btn btn-light" href="voiceService.php">Read More</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item text-center p-4 border h-100">
              <h5 class="mb-3">SECURITY</h5>
              <p>CCTV, access control and intercom systems to protect your premises and staff.</p>
              <a class="btn btn-light" href="cctv.php">Read More</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item text-center p-4 border h-100">
              <h5 class="mb-3">POWER SOLUTIONS</h5>
              <p>UPS and generator solutions to keep critical systems running during outages.</p>
              <a class="btn btn-light" href="power.php">Read More</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item text-center p-4 border h-100">
              <h5 class="mb-3">IT SERVICE & SUPPORT</h5>
              <p>Managed IT, support contracts and consulting to keep your IT reliable and secure.</p>
              <a class="btn btn-light" href="officeIT.php">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Add block end -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
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

    <script>
        const exploreContents = {
            fiber: `
    <strong>Fiber, LTE & 5G Connections</strong>
    <ul>
      <li>Ultra-fast and reliable internet speeds</li>
      <li>Flexible packages for home and business</li>
      <li>Seamless streaming and downloads</li>
      <li>Professional installation and support</li>
      <li>24/7 customer care</li>
    </ul>
    <p>Choose us for a hassle-free connection experience and ongoing support that keeps you online.</p>
  `,
            itc: `
    <strong>Reliable ITC Solution</strong>
    <ul>
      <li>Comprehensive IT consulting</li>
      <li>Custom solutions for your business</li>
      <li>Proactive system monitoring</li>
      <li>Cybersecurity and data protection</li>
      <li>Expert support team</li>
    </ul>
    <p>Let us handle your IT so you can focus on your business growth and success.</p>
  `,
            printer: `
    <strong>Office and Production Printers</strong>
    <ul>
      <li>High-performance printers for all needs</li>
      <li>Efficient and cost-effective printing</li>
      <li>Professional setup and training</li>
      <li>Maintenance and repair services</li>
      <li>Wide range of models and brands</li>
    </ul>
    <p>We ensure your printing never stops. Trust us for reliable office automation.</p>
  `,
            voip: `
    <strong>VOICE Solutions</strong>
    <ul>
      <li>Crystal-clear call quality</li>
      <li>Affordable local and international rates</li>
      <li>Advanced PBX features</li>
      <li>Easy integration with your systems</li>
      <li>Scalable for any business size</li>
    </ul>
    <p>Stay connected with our expert VOICE setup and ongoing support.</p>
  `
        };

        document.querySelectorAll('.explore-more-btn').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const key = btn.getAttribute('data-explore');
                document.getElementById('exploreModalLabel').textContent = btn.closest('.carousel-caption').querySelector('h1').textContent;
                document.getElementById('exploreModalBody').innerHTML = exploreContents[key] || "More information coming soon.";
            });
        });
    </script>

    <!-- Explore More Modal -->
    <div class="modal fade" id="exploreModal" tabindex="-1" aria-labelledby="exploreModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="exploreModalLabel">More Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="exploreModalBody">
                    <!-- Content will be injected here -->
                </div>
            </div>
        </div>
    </div>

</body>

</html>