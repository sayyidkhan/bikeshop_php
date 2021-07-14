<?php
  define('CSS_PATH', 'css/'); //define bootstrap css path
  define('IMG_PATH','./img/'); //define img path
  $main_css = 'main.css'; // main css filename
  $flex_css = 'flex.css'; // flex css filename
?>

<!-- manage global variables -->
<?php
  $selectedBikeId = null;
  $bikeListings = null;
  // 
  if (isset($_GET['selectedBikeId'])) {
     $selectedBikeId = $_GET['selectedBikeId'];
  }

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
              <li><a href="index.php">Home</a></li>
              <li><a href="">Manage Listing</a></li>
              <li><a href="bikelisting.php">View Listing's</a></li>
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

            <?php
              $currentID = $GLOBALS['selectedBikeId'];

              if($currentID === null) {
                echo '<h5 class="center-text" style="padding-top: 3em;">No bike selected...</h5>';
              }
              else {
                function expressInterestForm($currentID) {
                    function persistData($name,$phone,$email,$expectedprice,$currentID) {

                    }
                    //button
                    $disabled = "";
                    $disabledColor = "bgprimarycolor";
                    $successMsg = "";
                    //err variables
                    $nameErr = "";
                    $emailErr = "";
                    $phoneErr = "";
                    $expectedPriceErr = "";

                    //variables to store into textfile
                    $name = null;
                    $phone = null;
                    $email = null;
                    $expectedPrice = null;

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        function cleanInput($data) {
                          $data = trim($data);
                          $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                          return $data;
                        }
                         //name validation
                         if (empty($_POST["name"])) {
                            $nameErr = "Name is required";
                         } 
                         else {
                            $name = cleanInput($_POST["name"]);
                            //if there is any digit throw error
                            $pattern = "/\d+/";
                            if (preg_match($pattern , $name) > 0) {
                              $nameErr = "Invalid name format";
                            }
                         }
                         //phone validation
                         if (empty($_POST["phone"])) {
                            $phoneErr = "phone is required";
                         } 
                         else {
                            $phone = cleanInput($_POST["phone"]);
                            //if there is any string throw error
                            $pattern = "/[a-zA-Z]+/";
                            if (preg_match($pattern , $phone) > 0) {
                              $phoneErr = "Invalid phone format";
                            }
                         }
                        //email validation
                        if (empty($_POST["email"])) {
                          $emailErr = "Email is required";
                        } else {
                          $email = cleanInput($_POST["email"]);
                          // check if e-mail address is well-formed
                          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                          }
                        }
                        //price validation
                        if (empty($_POST["expectedPrice"])) {
                          $expectedPriceErr = "Price is required";
                        } else {
                          $expectedPrice = cleanInput($_POST["expectedPrice"]);
                          // check for number, if value is lesser than 1, then it is not numeric
                          if(!is_numeric($expectedPrice)) {
                             $expectedPriceErr = "Invalid price format";
                          }
                        }

                        //if all validation is successful - all fields are blank, then save data
                        if($nameErr === $emailErr && $phoneErr === $expectedPriceErr) {
                            $disabledColor = "";
                            $disabled = 'disabled';
                            $successMsg = 'You have successfully submitted!';
                        }
                    }

                    $eachBox = 
                    "
                    <div>
                      <h6>Express Interest For Purchase:</h6>

                      <p class='required-text' style='float: left;'>* required field</p><br>
                      <form method='post' accept-charset='utf-8'>
                        <input class='inputstyling' type='text' name='name'  placeholder='your name...' value='$name'>
                        <span class='required-text'>* ${nameErr}</span><br>
                        <input class='inputstyling' type='text' name='phone' placeholder='your phonenumber...' value='$phone'>
                        <span class='required-text'>* ${phoneErr}</span><br>
                        <input class='inputstyling' type='text' name='email' placeholder='your email...' value='$email'>
                        <span class='required-text'>* ${emailErr}</span><br>
                        <input class='inputstyling' type='string' name='expectedPrice' placeholder='your expected price...' value='$expectedPrice'>
                        <span class='required-text'>* ${expectedPriceErr}</span><br>
                        <button
                         $disabled
                         type='submit'
                         class='$disabledColor'
                         style='height: 2em; width: 8em;'
                         >
                         Submit
                         </button>
                         <span class='required-text' style='color: green;'>$successMsg</span>
                      </form>
                    </div>
                    ";
                    return $eachBox;
                }
                function renderSelectedBicycle($currentID) {
                      $bikeID = $currentID;
                      $peopleInterested = 2;
                      $title = "$x - title of bike listing";
                      $description = 'enter the description here. enter the description here. enter the description here.';
                      $price = $x . "0";
                      $imgURL = 'https://www.globalbrandsmagazine.com/wp-content/uploads/2020/05/bicycle-159680_1280.jpg';
                      $expressInterestForm = expressInterestForm($currentID);
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
                          <button 
                          name='selectedBikeId'
                          value='$bikeID'
                          class='bgteritarycolor1'
                          style='padding: 0.5em;'
                          disabled
                          >
                          $peopleInterested people are interested right now !
                          </button>
                         <div class='price-text-div primarycolor'><p class='price-text'>$price</p></div>
                        </div>

                        <!-- express interest form -->
                        $expressInterestForm

                      </div>
                      ";
                      echo $eachBox;
                }
                echo "<div id='selectedBikeDashboard' class='solidborder flex-container' style='margin-top: 2em;'>";
                echo renderSelectedBicycle($currentID);
                echo "</div>";
              }
            ?>
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
                  $bikeListings = $GLOBALS['bikeListings'];
                  $finalOutput = "";
                  for ($x = 1; $x < $listLen + 1; $x++) {
                      $bikeID = $x . ' - bike id here';
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
                        <form action='bikelisting.php#selectedBikeDashboard' method='get' class='removeCSS'>
                          <button 
                          type='submit'
                          name='selectedBikeId'
                          value='$bikeID'
                          class='bgsecondarycolor'
                          style='padding: 0.5em;'
                          >
                          View Detail
                          </button>
                        </form>
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