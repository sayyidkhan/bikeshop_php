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
// name phone email - serialnumber type description - year of manufacture characteristics condition - website
$nameErr = $phoneErr = $emailErr = $serialnumErr = $typeErr = $descriptionErr = $yearErr = $characterErr = $conditionErr = "";
$name = $phone = $email = $serialnum = $type = $description = $year = $character = $condition = "";

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
  
  if (empty($_POST["serialnum"])) {
    $serialnumErr = "Serial Number is required";
  } else {
    $serialnum = test_input($_POST["serialnum"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[[0-9]{2}-[0-9]{3}-[a-z]{3}]*$/",$serialnum)) {
      $serialnumErr = "Only letters and numbers allowed";
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
  
  if (empty($_POST["year"])) {
    $yearErr = "Year of Manufacture is required";
  } else {
    $year = test_input($_POST["year"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$year)) {
      $yearErr = "Only numbers allowed";
    }
  }
  
  if (empty($_POST["character"])) {
    $typeErr = "Characteristics is required";
  } else {
    $character = test_input($_POST["character"]);
  }
  
  if (empty($_POST["condition"])) {
    $typeErr = "Vehicle condition is required";
  } else {
    $condition = test_input($_POST["condition"]);
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
  Serial Number:<br><br> <input type="text" name="serialnum" value="<?php echo $serialnum;?>">
  <span class="error">* <?php echo $serialnumErr;?></span>
  <br><br>
  Type:<br><br> <input type="text" name="type" value="<?php echo $type;?>">
  <span class="error">* <?php echo $typeErr;?></span>
  <br><br>
  Description:<br><br> <textarea name="description" rows="5" cols="40"><?php echo $description;?></textarea>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Year of Manufacture:<br><br> <input type="number_format" name="year" value="<?php echo $year;?>">
  <span class="error">* <?php echo $yearErr;?></span>
  <br><br>
  Character:<br><br> <textarea name="character" rows="5" cols="40"><?php echo $character;?></textarea>
  <span class="error">* <?php echo $characterErr;?></span>
  <br><br>
  Condition:<br><br> <textarea name="condition" rows="5" cols="40"><?php echo $condition;?></textarea>
  <span class="error">* <?php echo $conditionErr;?></span>
  <br><br>
  <br><br> <input type="submit" name="submit" value="Submit">  
  <br><br>
</ul>
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
$name = "Name: ".$_POST['name']."
";
$phone = "Phone: ".$_POST['phone']."
";
$email = "E-mail: ".$_POST['email']."
";
$serialnum = "Serial NumBER: ".$_POST['serialnum']."
";
$type = "Type: ".$_POST['type']."
";
$description = "Description: ".$_POST['description']."
";
$year = "Year of Manufacture: ".$_POST['year']."
";
$character = "Characteristics: ".$_POST['character']."
";
$condition = "Condition: ".$_POST['condition']."
";
$file=fopen("BikesforSale.txt", "a");
fwrite($file, $name);
fwrite($file, $phone);
fwrite($file, $email);
fwrite($file, $serialnum);
fwrite($file, $type);
fwrite($file, $description);
fwrite($file, $year);
fwrite($file, $character);
fwrite($file, $condition);
fwrite($file, "\n");
fclose($file);
}
?>

