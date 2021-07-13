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
    <link rel="stylesheet" href='<?php echo (BS_CSSPATH . "$bootstrap_css"); ?>' type="text/css">

  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 py-lg-2">
        <div class="container"><a class="navbar-brand py-3 d-flex align-items-center" href="index.php"><img src="img/logo.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">Takoko</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                    <!-- Navbar link-->
                    <a class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link-->
                    <a class="nav-link" href="detail.html">Manage Listing</a>
              </li>
              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="bikelisting.php" data-toggle="modal">View Listing's</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- search section-->
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Bike Listing's</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <!-- listing section-->
    <section>
      <div class="album py-5 bg-light">
        <div class="container">
            <div class="py-lg-5">
            <?php
            //feed bike listing data here
            $totalBikeListing = 4;
            //if listing is 0, display no results
            if($totalBikeListing === 0) {
              echo '<h4 class="text-center py-lg-5">No bike listings available at the current moment...</h4>';
            }
            //otherwise render listing
            else {
              function renderBoxes($listLen) {
                 $finalOutput = "";
                 for ($x = 1; $x < $listLen + 1; $x++) {
                   //format each box
                   $bikeID = 'bike id here';
                   $title = "$x - title of bike listing";
                   $description = 'enter the description here.';
                   $price = $x . "0.00";
                   $imgURL = 'https://www.globalbrandsmagazine.com/wp-content/uploads/2020/05/bicycle-159680_1280.jpg';
                   $eachBox =
                   "
                    <div class='col pb-4'>
                      <div class='card shadow-sm'>

                        <img 
                          class='bd-placeholder-img card-img-top p-4'
                          width='100%'
                          height='225'
                          src='$imgURL'
                        />

                        <div class='card-body'>
                          <small>$bikeID</small>
                          <h5>$title</h5>
                          <p class='card-text'>$description</p>

                          <div class='d-flex justify-content-between align-items-center'>
                            <div class='btn-group'>
                              <button type='button' class='btn btn-sm btn-outline-secondary'>View Detail</button>
                            </div>
                            <p class='text-dark'>\$ $price</p>
                          </div>

                         </div>

                      </div>
                    </div>
                    ";
                    //append each box into final output
                    $finalOutput .= $eachBox;
                 }
                 return $finalOutput;
              }
              //start of listing
              echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
              //render boxes here
              echo renderBoxes($totalBikeListing);
              echo '</div>';
            }
            ?>
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
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Navigation</h6>
            <div class="d-flex flex-wrap">
              <ul class="list-unstyled text-muted mb-0 mb-3 mr-4">
                <li><a class="reset-anchor text-small" href="#">Home</a></li>
                <li><a class="reset-anchor text-small" href="#">Manage Listing</a></li>
                <li><a class="reset-anchor text-small" href="bikelisting.php">View Listing</a></li>
              </ul>
            </div>
          </div>
         
        </div>
      </div>
      <div class="copyrights py-4" style="background: #0e0e0e">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6 text-lg-left mb-2 mb-md-0">
              <!-- php to manage current year -->
              <p class="mb-0 text-muted mb-0 text-small">
              &copy;
              <?php 
              $currentYear = date('Y'); 
              echo $currentYear; 
              ?>
              All rights reserved.
              </p>
              <!-- php to manage current year -->
            </div>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>