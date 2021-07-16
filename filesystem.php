<?php

include 'classes/bikelisting.php';

$filename = 'database/BikesforSale.txt';
$idToDelete = '17-954-IBQ';

function deleteFile($filename, $idToDelete) {
    $result = false;
    try {
        $file = file($filename);
        foreach ($file as $key => $lines) {
            $instance = bikelisting::initUsingFileLines($lines);
            $bikeId = $instance->serialnumber;
            //removing the line
            if($bikeId === $idToDelete) {
               unset($file[$key]);
               break;
            }
        }
        //reindexing array
        $file = array_values($file);
        //writing to file
        file_put_contents($filename, implode($file));
        $result = true;
    }
    catch (Exception $e) {
        $result = false;
    }
    return $result;
}

echo deleteFile($filename,$idToDelete);


echo "\n";
echo "\n";
echo "\n";

?>
