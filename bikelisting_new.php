<?php
  define('CSS_PATH', 'css/'); //define bootstrap css path
  define('IMG_PATH','./img/'); //define img path
  $main_css = 'main.css'; // main css filename
  $flex_css = 'flex.css'; // flex css filename
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Takoko - Bike Shop</title>
    <!-- main CSS-->
    <link rel="stylesheet" href='<?php echo (CSS_PATH . "$main_css"); ?>' type="text/css">
    <link rel="stylesheet" href='<?php echo (CSS_PATH . "$flex_css"); ?>' type="text/css">

  </head>
  <body>

      <div id="wrapper">

        <div id="header">
          <h1>Takoko</h1>
          <div id="nav">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">Manage Listing</a></li>
              <li><a href="">View Listing's</a></li>
            </ul>
          </div>
        </div>

        <div id="content">
           <div>
            <h2 class="centerText primarycolor">View Listing's</h2>
            <h3 class="centerText">Some dummy Text here.</h3>
           </div>
        </div>

        <div 
        id="listing-dashboard" 
        class="flex-container"
        style="max-width: 80%; margin: auto;">
          <!-- start of selected listing -->
          <div class="flex-child dotted" >
            <h4>Selected Bike</h4>
          </div>
          <!-- end of selected listing -->
          <!-- start of listing -->
          <div class="flex-child">
            <h4>Available Listing's</h4>
            <?php
            //feed bike listing data here
            $totalBikeListing = 3;
            //if listing is 0, display no results
            if($totalBikeListing === 0) {
               echo '<h6 class="center-text">No bike listings available at the current moment...</h6>';
            }
            else {
               function renderBoxes($listLen) {
                  $finalOutput = "";
                  for ($x = 1; $x < $listLen + 1; $x++) {
                      $bikeID = 'bike id here';
                      $title = "$x - title of bike listing";
                      $description = 'enter the description here. enter the description here. enter the description here.';
                      $price = $x . "0.00";
                      $imgURL = 'https://www.globalbrandsmagazine.com/wp-content/uploads/2020/05/bicycle-159680_1280.jpg';
                      $eachBox =
                      "
                      <div class='flex-bikelisting-child'>
                      
                      <div><img src='$imgURL' class='bike-img-format' /></div>
                      
                      <div class='text-leftalign'>
                        <p class='bikeid-text text-leftalign'>$bikeID</p>
                        <p class='title-text text-leftalign'>$title</p>
                        <p class='description-text text-leftalign'>$description</p>
                      </div>

                      <div>
                        <button class='bgsecondarycolor' style='padding: 0.5em; margin: 0.25em;'>View Detail</button>
                        <div class='price-text-div primarycolor'><p class='price-text'>$price</p></div>
                      </div>

                      </div>
                      ";
                      //append to final output
                      $finalOutput .= $eachBox;

                  }
                  echo $finalOutput;
               }
               echo '<div class="scrollfeature">';
               echo '<div class="flex-bikelisting-parent">';
               echo renderBoxes($totalBikeListing);
               echo '</div>';
               echo '</div>';
            }

            ?>
            
          </div>
          <!-- end of listing -->
        </div>

        <div id="footer">
          <p>
            &copy;
            <?php 
            $currentYear = date('Y'); 
            echo $currentYear; 
            ?>
            All rights reserved.
          </p>
        </div>

    </div>


  </body>
</html>