<?php
  define('BS_CSSPATH', 'css/'); //define bootstrap css path
  define('IMG_PATH','./img/'); //define img path
  $bootstrap_css = 'bootstrap.min.css'; //bootstrap_css filename
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Takoko - Bike Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo (BS_CSSPATH . "$bootstrap_css"); ?>" type="text/css">
    <!-- Google fonts-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700&amp;display=swap"> -->
    <!-- Owl carousel2-->
    <!-- <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.min.css"> -->
    <!-- Bootstrap Select-->
    <!-- <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css"> -->
    <!-- Lightbox-->
    <!-- <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css"> -->
    <!-- theme stylesheet-->
    <!-- <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"> -->
    <!-- Custom stylesheet - for your changes-->
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 py-lg-2">
        <div class="container"><a class="navbar-brand py-3 d-flex align-items-center" href="index.html"><img src="img/logo.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">Takoko</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="detail.html">Manage Listing</a>
              </li>
              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="#listingModal" data-toggle="modal">View Listing's</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Hero section-->
    <section class="hero-home py-5">

      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-5">
            <p class="h6 text-uppercase text-primary mb-3">Online Marketplace to buy & Sell Bikes</p>
            <h1 class="mb-5">Welcome to Takoko ! Your one stop shop for all your bike needs.</h1>
            <div class="pb-5">
            <form class="p-2 rounded shadow-sm bg-white" action="#">
              <div class="input-group">
                <!-- dropdown -->
                <div class="p-2">
                <select name="cars" id="cars">
                  <option value="volvo">Bike S/N</option>
                  <option value="saab">Bike Name</option>
                </select>
                </div>
                <!-- dropdown -->
                <input class="form-control border-0 mr-2" type="search" placeholder="Search for your dream bike...">
                <div class="input-group-append rounded">
                  <button class="btn btn-primary rounded" type="submit">
                    <img src="<?php echo (IMG_PATH . 'magnifying-glass.png') ?>" width='25px' style='padding: 1px;' />
                  </button>
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-7">
             <img 
            src="<?php echo (IMG_PATH . 'mainpage-bicycle.jpg') ?>"
            class="d-block mx-lg-auto img-fluid"
            alt="online bike marketplace"
            width="500"
            height="500"
            loading="lazy">
          </div>
        </div>
      </div>
    </section>
    <!-- Features section-->
    <section class="py-5" style="margin-top: -5em;">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow">
              <div class="card-body p-5">
                <div class="row">
                  <div class="col-lg-4 mb-4 mb-lg-0">
                        <span class="mb-3 text-primary">
                         <img src="<?php echo (IMG_PATH . 'bicycle.png') ?>" width='50px' style='padding-bottom: 3em;' />
                        </span>
                    <h2 class="h5">Search Bike's Easily</h2>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  </div>
                  <div class="col-lg-4 mb-4 mb-lg-0">
                         <span class="mb-3 text-primary">
                          <img src="<?php echo (IMG_PATH . 'info.png') ?>" width='50px' style='padding-bottom: 3em;' />
                        </span>
                    <h2 class="h5">Provide Info's Easily</h2>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  </div>
                  <div class="col-lg-4">
                         <span class="mb-3 text-primary">
                          <img src="<?php echo (IMG_PATH . 'list.png') ?>" width='50px' style='padding-bottom: 3em;' />
                        </span>
                    <h2 class="h5">List Bike's Easily</h2>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer style="background: #111;">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
            <div class="d-flex align-items-center mb-3"><img src="img/logo-footer.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-white ml-2">Takoko</span></div>
            <p class="text-muted text-small font-weight-light mb-3">online marketplace to buy & sell bikes</p>
            <ul class="list-inline mb-0 text-white">
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Navigation</h6>
            <div class="d-flex flex-wrap">
              <ul class="list-unstyled text-muted mb-0 mb-3 mr-4">
                <li><a class="reset-anchor text-small" href="#">Home</a></li>
                <li><a class="reset-anchor text-small" href="#">Manage Listing</a></li>
                <li><a class="reset-anchor text-small" href="#">View Listing</a></li>
              </ul>
            </div>
          </div>
         
        </div>
      </div>
      <div class="copyrights py-4" style="background: #0e0e0e">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6 text-lg-left mb-2 mb-md-0">
              <!-- use php date here to update the year -->
              <p class="mb-0 text-muted mb-0 text-small">&copy; 2021 All rights reserved.</p>
               <!-- use php date here to update the year -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
<!--     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>
    <script src="js/front.js"></script> -->

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="<?php echo (BS_CSSPATH . '$bs_icon_css'); ?>" type="text/css">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  </body>
</html>