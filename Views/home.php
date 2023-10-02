<?php 
    nav_info($data); 
?>

<!DOCTYPE html> 
  <head>
    <meta charset="utf-8" />
    <title>SICBBY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="Assets/Ptemplate/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="Assets/Ptemplate/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="Assets/Ptemplate/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="Assets/Ptemplate/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Assets/Ptemplate/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="Assets/Ptemplate/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->

    <!-- Topbar End -->

    <!-- Navbar Start -->
 


    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-5"
          >
            <h1 class="display-4 text-light mb-5">
              Corredor Biológico Bosques del Yaguarundí
            </h1>
            <div class="d-flex align-items-center pt-4 animated slideInDown">
              <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5"
                >Read More</a
              >
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button>
              <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item">
              <img class="img-fluid" src="Assets/Ptemplate/img/carousel-1.jpg" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="Assets/Ptemplate/img/carousel-2.jpg" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="Assets/Ptemplate/img/carousel-3.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div
      class="modal modal-video fade"
      id="videoModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
              <iframe
                class="embed-responsive-item"
                src=""
                id="video"
                allowfullscreen
                allowscriptaccess="always"
                allow="autoplay"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Modal End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary me-2">#</span>SICBBY</p>
            <h1 class="display-5 mb-4">
              Why You Should Visit
              <span class="text-primary">SICBBY</span> Park!
            </h1>
            <p class="mb-4">
              Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
              stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo
              nonumy clita sit at, sed sit sanctus dolor eos.
            </p>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Free Car
              Parking
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Natural
              Environment
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Professional
              Guide & Security
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>World Best
              Animals
            </h5>
            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border">
              <img class="img-fluid" src="Assets/Ptemplate/img/about.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div
      class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <i class="fa fa-paw fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Total Animal</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-users fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Daily Vigitors</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Total Membership</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
            <p class="text-white mb-0">Save Wild Life</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="col-lg-6">
            <p><span class="text-primary me-2">#</span>Our Services</p>
            <h1 class="display-5 mb-0">
              Special Services For
              <span class="text-primary">SICBBY</span> Visitors
            </h1>
          </div>
          <div class="col-lg-6">
            <div
              class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5"
            >
              <i class="fa fa-3x fa-mobile-alt text-white"></i>
              <div class="ms-4">
                <p class="text-white mb-0">Call for more info</p>
                <h2 class="text-white mb-0">+012 345 6789</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-5 gx-4">
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-2.png" alt="Icon" />
            <h5 class="mb-3">Car Parking</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-3.png" alt="Icon" />
            <h5 class="mb-3">Animal Photos</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-4.png" alt="Icon" />
            <h5 class="mb-3">Guide Services</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.7s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-5.png" alt="Icon" />
            <h5 class="mb-3">Food & Beverages</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-6.png" alt="Icon" />
            <h5 class="mb-3">Zoo Shopping</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-7.png" alt="Icon" />
            <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-8.png" alt="Icon" />
            <h5 class="mb-3">Play Ground</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
          <div
            class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
            data-wow-delay="0.7s"
          >
            <img class="img-fluid mb-3" src="Assets/Ptemplate/img/icon/icon-9.png" alt="Icon" />
            <h5 class="mb-3">Rest House</h5>
            <span
              >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
              sed diam stet diam sed stet.</span
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Animal Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="row g-5 mb-5 align-items-end wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="col-lg-6">
            <p><span class="text-primary me-2">#</span>Our Animals</p>
            <h1 class="display-5 mb-0">
              Let`s See Our <span class="text-primary">Zoofari</span> Awsome
              Animals
            </h1>
          </div>
          <div class="col-lg-6 text-lg-end">
            <a class="btn btn-primary py-3 px-5" href=""
              >Explore More Animals</a
            >
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="img/animal-md-1.jpg"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="Assets/Ptemplate/img/animal-md-1.jpg" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Elephant</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="img/animal-lg-1.jpg"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="Assets/Ptemplate/img/animal-lg-1.jpg" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Elephant</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="img/animal-lg-2.jpg"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="Assets/Ptemplate/img/animal-lg-2.jpg" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Elephant</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="img/animal-md-2.jpg"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="Assets/Ptemplate/img/animal-md-2.jpg" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Elephant</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="img/animal-md-3.jpg"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="Assets/Ptemplate/img/animal-md-3.jpg" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Elephant</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="img/animal-lg-3.jpg"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="Assets/Ptemplate/img/animal-lg-3.jpg" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Elephant</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Animal End -->

    <!-- Visiting Hours Start -->
    <div
      class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span>Monday</span>
                <span>9:00AM - 6:00PM</span>
              </li>
              <li class="list-group-item">
                <span>Tuesday</span>
                <span>9:00AM - 6:00PM</span>
              </li>
              <li class="list-group-item">
                <span>Wednesday</span>
                <span>9:00AM - 6:00PM</span>
              </li>
              <li class="list-group-item">
                <span>Thursday</span>
                <span>9:00AM - 6:00PM</span>
              </li>
              <li class="list-group-item">
                <span>Friday</span>
                <span>9:00AM - 6:00PM</span>
              </li>
              <li class="list-group-item">
                <span>Saturday</span>
                <span>9:00AM - 6:00PM</span>
              </li>
              <li class="list-group-item">
                <span>Sunday</span>
                <span>Closed</span>
              </li>
            </ul>
          </div>
          <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
            <h1 class="display-6 text-white mb-5">Contact Info</h1>
            <table class="table">
              <tbody>
                <tr>
                  <td>Office</td>
                  <td>123 Street, New York, USA</td>
                </tr>
                <tr>
                  <td>Zoo</td>
                  <td>123 Street, New York, USA</td>
                </tr>
                <tr>
                  <td>Ticket</td>
                  <td>
                    <p class="mb-2">+012 345 6789</p>
                    <p class="mb-0">ticket@example.com</p>
                  </td>
                </tr>
                <tr>
                  <td>Support</td>
                  <td>
                    <p class="mb-2">+012 345 6789</p>
                    <p class="mb-0">support@example.com</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Visiting Hours End -->

    <!-- Membership Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="row g-5 mb-5 align-items-end wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="col-lg-6">
            <p><span class="text-primary me-2">#</span>Membership</p>
            <h1 class="display-5 mb-0">
              You Can Be A Proud Member Of
              <span class="text-primary">Zoofari</span>
            </h1>
          </div>
          <div class="col-lg-6 text-lg-end">
            <a class="btn btn-primary py-3 px-5" href="">Special Pricing</a>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="membership-item position-relative">
              <img class="img-fluid" src="Assets/Ptemplate/img/animal-lg-1.jpg" alt="" />
              <h1 class="display-1">01</h1>
              <h4 class="text-white mb-3">Popular</h4>
              <h3 class="text-primary mb-4">$99.00</h3>
              <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>2 adult and 2 child
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Free animal
                exhibition
              </p>
              <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="membership-item position-relative">
              <img class="img-fluid" src="Assets/Ptemplate/img/animal-lg-2.jpg" alt="" />
              <h1 class="display-1">02</h1>
              <h4 class="text-white mb-3">Standard</h4>
              <h3 class="text-primary mb-4">$149.00</h3>
              <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>4 adult and 4 child
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Free animal
                exhibition
              </p>
              <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="membership-item position-relative">
              <img class="img-fluid" src="Assets/Ptemplate/img/animal-lg-3.jpg" alt="" />
              <h1 class="display-1">03</h1>
              <h4 class="text-white mb-3">Premium</h4>
              <h3 class="text-primary mb-4">$199.00</h3>
              <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>6 adult and 6 child
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Free animal
                exhibition
              </p>
              <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Membership End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <h1
          class="display-5 text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          Our Clients Say!
        </h1>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="Assets/Ptemplate/img/testimonial-1.jpg"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                clita erat magna elitr erat sit sit erat at rebum justo sea
                clita.
              </p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="Assets/Ptemplate/img/testimonial-2.jpg"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                clita erat magna elitr erat sit sit erat at rebum justo sea
                clita.
              </p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
              src="Assets/Ptemplate/img/testimonial-3.jpg"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                clita erat magna elitr erat sit sit erat at rebum justo sea
                clita.
              </p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
  </body>
</html>

<?php 
  
	footer_info($data);
?>