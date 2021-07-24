<?php
  include 'classes/bikelisting.php';

  define('CSS_PATH', 'css/'); //define bootstrap css path
  define('IMG_PATH','./img/'); //define img path
  $main_css = 'main.css'; // main css filename
  $flex_css = 'flex.css'; // flex css filename

  define('CURRENT_FILENAME','bikelisting.php'); // filename to define globally

  define('DB_ExpInterest', 'database/ExpInterest.txt'); //filepath to expinterest.txt
  define('DB_BikesforSale', 'database/BikesforSale.txt'); //filepath to expinterest.txt
?>

<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Takoko - Bike Shop</title>
    <!-- main CSS-->
    <link rel="stylesheet" href='<?php echo (CSS_PATH . "$main_css"); ?>' type="text/css">

<style>
.error {color: #FF0000;}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=number_format], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

input[type=submit]:hover {
  background-color: primarycolor;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


.col-25 {
  float: center;
  width: 50%;
  margin-top: 6px;
}

.col-75 {
  float: center;
  width: 50%;
  margin-top: 6px;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) { 
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 10;
  }
}

form {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
h2{
	color:DodgerBlue;
	text-align: center;
}
h2 {display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;}
  
p {display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;}
  
</style>
</head>
  <body>

      <div id="wrapper">

        <div id="header">
          <h1>Takoko</h1>
          <div id="nav">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="bikedetails.php">Add Listing</a></li>
              <li><a href="<?php echo (CURRENT_FILENAME); ?>">Manage Listing</a></li>
              <li><a href="bikeListing.php">View Listing's</a></li>
            </ul>
          </div>
        </div> 

<?php
// define variables and set to empty values
// name phone email - serialnumber type description - yearofmanufacture of manufacture characteristics condition - website
$nameErr = $phoneErr = $emailErr = $titleErr = $serialnumberErr = $typeErr = $descriptionErr = $yearofmanufactureErr = $characteristicsErr = $conditionErr = $priceErr = "";
$name = $phone = $email = $title = $serialnumber = $type = $description = $yearofmanufacture = $characteristics = $condition = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Only numbers allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  if (empty($_POST["title"])) {
    $typeErr = "Vehicle title is required";
  } else {
    $title = test_input($_POST["title"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$title)) {
      $titleErr = "Only letters allowed";
    }
  }
  
  if (empty($_POST["serialnumber"])) {
    $serialnumberErr = "Serial Number is required";
  } else {
    $serialnumber = test_input($_POST["serialnumber"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[[0-9]{2}-[0-9]{3}-[a-z]{3}]*$/",$serialnumber)) {
      $serialnumberErr = "Only letters and numbers allowed";
    } // \d{2}-\d{3}-[a-z]{3} - a-zA-Z0-9
  }
  
  if (empty($_POST["type"])) {
    $typeErr = "Vehicle Type is required";
  } else {
    $type = test_input($_POST["type"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$type)) {
      $typeErr = "Only letters allowed";
    }
  }
  
  if (empty($_POST["description"])) {
    $descriptionErr = "Description is required";
  } else {
    $description = test_input($_POST["description"]);
  }
  
  if (empty($_POST["yearofmanufacture"])) {
    $yearofmanufactureErr = "yearofmanufacture of Manufacture is required";
  } else {
    $yearofmanufacture = test_input($_POST["yearofmanufacture"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$yearofmanufacture)) {
      $yearofmanufactureErr = "Only numbers allowed";
    }
  }
  
  if (empty($_POST["characteristics"])) {
    $typeErr = "characteristics is required";
  } else {
    $characteristics = test_input($_POST["characteristics"]);
  }
  
  if (empty($_POST["condition"])) {
    $typeErr = "Vehicle condition is required";
  } else {
    $condition = test_input($_POST["condition"]);
  }
  
  if (empty($_POST["price"])) {
    $priceErr = "Phone number is required";
  } else {
    $price = test_input($_POST["price"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$price)) {
      $priceErr = "Only numbers allowed";
    }
  }
}
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Bike Information</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<ul> 
  Name:<br><br> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Phone:<br><br> <input type="number_format" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  E-mail:<br><br> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Title:<br><br> <input type="text" name="title" value="<?php echo $title;?>">
  <span class="error">* <?php echo $titleErr;?></span>
  <br><br>
  Serial Number:<br><br> <input type="text" name="serialnumber" value="<?php echo $serialnumber;?>">
  <span class="error">* <?php echo $serialnumberErr;?></span>
  <br><br>
  Type:<br><br> <input type="text" name="type" value="<?php echo $type;?>">
  <span class="error">* <?php echo $typeErr;?></span>
  <br><br>
  Description:<br><br> <textarea name="description" rows="5" cols="40"><?php echo $description;?></textarea>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  yearofmanufacture of Manufacture:<br><br> <input type="number_format" name="yearofmanufacture" value="<?php echo $yearofmanufacture;?>">
  <span class="error">* <?php echo $yearofmanufactureErr;?></span>
  <br><br>
  characteristics:<br><br> <textarea name="characteristics" rows="5" cols="40"><?php echo $characteristics;?></textarea>
  <span class="error">* <?php echo $characteristicsErr;?></span>
  <br><br>
  Condition:<br><br> <textarea name="condition" rows="5" cols="40"><?php echo $condition;?></textarea>
  <span class="error">* <?php echo $conditionErr;?></span>
  <br><br>
  Price:<br><br> <input type="number_format" name="price" value="<?php echo $price;?>">
  <span class="error">* <?php echo $priceErr;?></span>
  <br><br>
  <br><br> <input type="submit" name="submit" value="Submit">  
  <br><br>
</ul>
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$title = 'title';
$serialnumber = $_POST['serialnumber'];
$type = $_POST['type'];
$description = $_POST['description'];
$yearofmanufacture = $_POST['yearofmanufacture'];
$characteristics = $_POST['characteristics'];
$condition = $_POST['condition'];
$price = "10.00";

$line = "$name,$phone,$email,$title,$serialnumber,$type,$description,$yearofmanufacture,$characteristics,$condition,$price\n";

$file=fopen(DB_BikesforSale, "a");
fwrite($file, "$line");
fclose($file);
}
?>

