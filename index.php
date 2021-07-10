<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Directory | Bootstrap 4 listing template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
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
        <div class="container"><a class="navbar-brand py-3 d-flex align-items-center" href="index.html"><img src="img/logo.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">Listings</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="category.html">Category</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="detail.html">Detail</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-3"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="category.html">Category</a><a class="dropdown-item" href="detail.html">Detail</a></div>
              </li>
              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="#listingModal" data-toggle="modal">Add listing</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--  Modal -->
    <div class="modal fade" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingModal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header px-lg-5">
            <h5 class="modal-title" id="listingModalLabel">Add Listing</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body px-lg-5">
            <form action="#">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="fullName">Full name</label>
                  <input class="form-control form-control-lg" id="fullName" type="text" name="fullname" placeholder="Your full name">
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Email Address</label>
                  <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Your email address">
                </div>
                <div class="form-group col-lg-6">
                  <label for="fullName">Listing Type</label>
                  <select class="selectpicker" id="listingType" name="listing-type" data-style="bs-select-form-control" data-title="What do you want to add" data-width="100%" required>
                    <option value="tool">Tool</option>
                    <option value="resource">Resource</option>
                  </select>
                </div>
                <div class="form-group col-lg-6">
                  <label for="istingTitle">Listing title</label>
                  <input class="form-control form-control-lg" id="istingTitle" type="text" name="listing-title" placeholder="Title of your title">
                </div>
                <div class="form-group col-lg-6">
                  <label for="listingUrl">Listing URL</label>
                  <input class="form-control form-control-lg" id="listingUrl" type="text" name="listing-url" placeholder="Listing website url">
                </div>
                <div class="form-group col-lg-6">
                  <label for="listingCategory">Listing category</label>
                  <select class="selectpicker" id="listingCategory" name="listing-category" data-style="bs-select-form-control" data-title="Select listing category" data-width="100%" required>
                    <option value="">Marketing</option>
                    <option value="">Idea generation</option>
                    <option value="">Idea generation</option>
                    <option value="">Design</option>
                    <option value="">Naming</option>
                    <option value="">Domain names</option>
                    <option value="">Sales</option>
                    <option value="">Finance</option>
                    <option value="">Project management</option>
                    <option value="">Hosting</option>
                    <option value="">Social tools</option>
                  </select>
                </div>
                <div class="form-group col-lg-12">
                  <label for="listingDescription">Listing description</label>
                  <textarea class="form-control form-control-lg" id="listingDescription" name="listing-description" rows="5" placeholder="Add a small brief about your listing."></textarea>
                </div>
                <div class="form-group col-lg-6 mb-lg-0">
                  <label for="listingThumb">Listing thumbnail</label>
                  <input class="form-control form-control-lg-2" id="listingThumb" type="file" name="listing-thumb">
                </div>
                <div class="form-group col-lg-6 mb-lg-0">
                  <label for="listingCover">Listing cover</label>
                  <input class="form-control form-control-lg-2" id="listingCover" type="file" name="listing-cover">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer justify-content-start px-lg-5">
            <button class="btn btn-primary" type="submit">Submit listing</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero section-->
    <section class="hero-home py-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <p class="h6 text-uppercase text-primary mb-3">Listings</p>
            <h1 class="mb-5">A curated directory of tools and resources to build your startup.</h1>
            <form class="p-2 rounded shadow-sm bg-white" action="#">
              <div class="input-group">
                <input class="form-control border-0 mr-2" type="search" placeholder="Search tools and resources...">
                <div class="input-group-append rounded">
                  <button class="btn btn-primary rounded" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Features section-->
    <section class="py-5">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow">
              <div class="card-body p-5">
                <div class="row">
                  <div class="col-lg-4 mb-4 mb-lg-0">
                        <svg class="svg-icon mb-3 text-primary svg-icon-big">
                          <use xlink:href="#list-details-1"> </use>
                        </svg>
                    <h2 class="h5">Search your tool</h2>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  </div>
                  <div class="col-lg-4 mb-4 mb-lg-0">
                        <svg class="svg-icon mb-3 text-primary svg-icon-big">
                          <use xlink:href="#survey-1"> </use>
                        </svg>
                    <h2 class="h5">Gather your info</h2>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  </div>
                  <div class="col-lg-4">
                        <svg class="svg-icon mb-3 text-primary svg-icon-big">
                          <use xlink:href="#stack-1"> </use>
                        </svg>
                    <h2 class="h5">Build your startup</h2>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Essential tools-->
    <section class="pb-5">
      <div class="container pb-5">
        <header>
          <h2 class="h3 mb-1">Our essential tools</h2>
          <p class="text-muted text-small mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row text-center align-items-stretch">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card reset-anchor border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <div class="essential-tool-img mb-4 mx-auto" style="background: url(img/tool-1.png)"></div>
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">HubSpot for startup</a></h3>
                <p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card reset-anchor border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <div class="essential-tool-img mb-4 mx-auto" style="background: url(img/tool-2.png)"></div>
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Embroker stratup Program</a></h3>
                <p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card reset-anchor border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <div class="essential-tool-img mb-4 mx-auto" style="background: url(img/tool-3.png)"></div>
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Squadhelp</a></h3>
                <p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2 class="mb-1">Explore our categories</h2>
          <p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row text-center">
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#stack-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Marketing</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#pie-chart-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Project management</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#design-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Design</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#mental-health-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Idea generation</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#bookmark-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Naming</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#checked-window-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Domain names</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#list-details-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Hosting</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#sales-up-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Market research</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center pt-4"><a class="btn btn-primary" href="#">Show more categories</a></div>
        </div>
      </div>
    </section>
    <!-- Resources section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2 class="mb-1">Our Resources Collection</h2>
          <p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card shadow border-0 reset-anchor d-block hover-transition"><img class="img-fluid" src="img/tool-bg-1.jpg" alt="...">
                  <div class="card-body p-4">
                    <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Quitting my corporate job</a></h3>
                    <p class="text-muted text-small mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <div class="media align-items-center"><img class="rounded-circle" src="img/author-4.png" alt="..." width="30">
                      <div class="media-body d-flex ml-2 align-items-center"><span class="small text-muted mr-1">By</span>
                        <h6 class="mb-0"> <a class="reset-anchor" href="#">Ali Mesee</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card shadow border-0 reset-anchor d-block hover-transition"><img class="img-fluid" src="img/tool-bg-2.jpg" alt="...">
                  <div class="card-body p-4">
                    <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Writing a business plan</a></h3>
                    <p class="text-muted text-small mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <div class="media align-items-center"><img class="rounded-circle" src="img/author-5.png" alt="..." width="30">
                      <div class="media-body d-flex ml-2 align-items-center"><span class="small text-muted mr-1">By</span>
                        <h6 class="mb-0"> <a class="reset-anchor" href="#">Jason Doe</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col-lg-4">
                <div class="card shadow border-0 reset-anchor d-block hover-transition"><img class="img-fluid" src="img/tool-bg-3.jpg" alt="...">
                  <div class="card-body p-4">
                    <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Postmortem of a VC-backed</a></h3>
                    <p class="text-muted text-small mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <div class="media align-items-center"><img class="rounded-circle" src="img/author-6.png" alt="..." width="30">
                      <div class="media-body d-flex ml-2 align-items-center"><span class="small text-muted mr-1">By</span>
                        <h6 class="mb-0"> <a class="reset-anchor" href="#">Richard Wood</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col-lg-12 text-center pt-5"><a class="btn btn-primary" href="#">Show more resources</a></div>
        </div>
      </div>
    </section>
    <!-- Blog Section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2 class="mb-1">Explore our categories</h2>
          <p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card border-0 shadow hover-transition"><a href="#"><img class="card-img-top img-fluid" src="img/blog-1.jpg" alt="..."></a>
                  <div class="card-body p-5">
                    <p class="text-small text-muted mb-2">11 February, 2020</p>
                    <h3 class="h5"><a class="stretched-link reset-anchor" href="#">How To Get More Reviews For Your Startup Product</a></h3>
                    <p class="text-small text-muted">The quality of customer service can make or break a buyer’s relationship with the seller. According to the 2017 Customer Service Barometer...</p><a class="btn btn-link p-0" href="#">Read more</a>
                  </div>
                </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card border-0 shadow hover-transition"><a href="#"><img class="card-img-top img-fluid" src="img/blog-2.jpg" alt="..."></a>
                  <div class="card-body p-5">
                    <p class="text-small text-muted mb-2">11 February, 2020</p>
                    <h3 class="h5"><a class="stretched-link reset-anchor" href="#">Increasing Engagement Among Email Subscribers</a></h3>
                    <p class="text-small text-muted">The quality of customer service can make or break a buyer’s relationship with the seller. According to the 2017 Customer Service Barometer study published by...</p><a class="btn btn-link p-0" href="#">Read more</a>
                  </div>
                </div>
          </div>
          <div class="col-lg-4">
                <div class="card border-0 shadow hover-transition"><a href="#"><img class="card-img-top img-fluid" src="img/blog-3.jpg" alt="..."></a>
                  <div class="card-body p-5">
                    <p class="text-small text-muted mb-2">11 February, 2020</p>
                    <h3 class="h5"><a class="stretched-link reset-anchor" href="#">Lessons in Leadership: Q&amp;A with William Erbey</a></h3>
                    <p class="text-small text-muted">The quality of customer service can make or break a buyer’s relationship with the seller. According to the 2017 Customer Service Barometer study published by...</p><a class="btn btn-link p-0" href="#">Read more</a>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Newsletter section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2>Free tools to grow your startup</h2>
        </header>
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <form class="p-2 rounded shadow-sm bg-white" action="#">
              <div class="input-group">
                <input class="form-control border-0 mr-2" type="email" placeholder="Enter your email address">
                <div class="input-group-append rounded">
                  <button class="btn btn-primary rounded" type="submit">Get started today</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer style="background: #111;">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
            <div class="d-flex align-items-center mb-3"><img src="img/logo-footer.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-white ml-2">Listings</span></div>
            <p class="text-muted text-small font-weight-light mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <ul class="list-inline mb-0 text-white">
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Useful links</h6>
            <div class="d-flex flex-wrap">
              <ul class="list-unstyled text-muted mb-0 mb-3 mr-4">
                <li><a class="reset-anchor text-small" href="#">Tools</a></li>
                <li><a class="reset-anchor text-small" href="#">Resources</a></li>
                <li><a class="reset-anchor text-small" href="#">About us</a></li>
                <li><a class="reset-anchor text-small" href="#">Write to us</a></li>
              </ul>
              <ul class="list-unstyled text-muted mb-0">
                <li><a class="reset-anchor text-small" href="#">Privacy Policy </a></li>
                <li><a class="reset-anchor text-small" href="#">Cookie Policy</a></li>
                <li><a class="reset-anchor text-small" href="#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Newsletter</h6>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <form action="">
              <div class="input-group">
                <input class="form-control bg-none border-dark text-white" type="email" placeholder="Type your email address">
                <div class="input-group-append">
                  <button class="btn btn-light" type="submit"><i class="fas fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="copyrights py-4" style="background: #0e0e0e">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6 text-lg-left mb-2 mb-md-0">
              <p class="mb-0 text-muted mb-0 text-small">&copy; 2020 All rights reserved.</p>
            </div>
            <div class="col-md-6 col-sm-6 text-md-right">
              <p class="mb-0 text-muted mb-0 text-small">Template designed by <a class="reset-anchor text-primary" href="https://bootstraptemple.com/p/listings">Bootstrap Temple</a>.</p>
              <!-- If you want to remove the backlink, please purchase the Attribution-Free License.-->
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>