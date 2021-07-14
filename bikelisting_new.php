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
            <h3 class="centerText primarycolor">View Listing's</h3>
            <p class="centerText">Some dummy Text here.</p>
           </div>
        </div>

        <div 
        id="listing-dashboard" 
        class="flex-container"
        style="max-width: 80%; margin: auto;">
          <div class="flex-child dotted" >
          </div>
          <!-- start of listing -->
          <div class="flex-child flex-container">
            <div>1</div>
            <div>2</div>
            <div>3</div>  
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