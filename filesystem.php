<?php

include 'classes/bikelisting.php';


$BikesforSale = file('database/BikesforSale.txt');

function getBikeListFN($myList) {
    $result = array();
    foreach($myList as $lines) {
        $instance = bikelisting::initUsingFileLines($lines);
        array_push($result, $instance);
    }
    return $result;
}


echo print_r(getBikeListFN($BikesforSale)[0]);

echo "\n";
echo "\n";
echo "\n";

?>
