<head>
  <?php 
		$nombreSitio = NOMBRE_EMPESA;
		$descripcion = DESCRIPCION;
		$nombreProducto = NOMBRE_EMPESA;
		$urlWeb = base_url();
		$urlImg = media()."/images/portada.jpg";
		
	?>
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


	  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/Ptemplate/css/style.css">
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


    <script src="Assets/Ptemplate/vendor/sweetalert/sweetalert.min.js"></script>

    <link rel="stylesheet" href="Assets/Ptemplate/vendor/sweetalert/sweetalert.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Assets/Ptemplate/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="Assets/Ptemplate/css/style.css" rel="stylesheet" />
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>Guanacaste, Costa Rica</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-phone-alt text-primary me-2"></small>
            <small>+506 26262626</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/people/Corredor-Biológico-Potrero-Caimital/100072017805336/"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <!-- <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-0" href=""
              ><i class="fab fa-instagram"></i
            ></a> -->
          </div>
        </div>
      </div>
    </div>
<nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="<?= base_url(); ?>" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="Assets/Ptemplate/img/icon/icon-10.png" alt="Icon" />
        <h1 class="m-0 text-primary">SICBBY</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >

        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="<?= base_url(); ?>" class="nav-item nav-link active">Home</a>
          <a href="<?= base_url(); ?>/voluntario" class="nav-item nav-link">Voluntarios</a>
        
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="" class="dropdown-item">Our Animals</a>
              <a href="membership.html" class="dropdown-item">Membership</a>
              <a href="visiting.html" class="dropdown-item">Visiting Hours</a>
              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
              <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="login" class="btn btn-primary"
          >Iniciar Sesion<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>
