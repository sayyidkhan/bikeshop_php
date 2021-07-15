<?php

include 'classes/interestuser.php';


$file = file('database/ExpInterest.txt');

function retireveData($bikeId,$file) {
                         //explode each line to become interestUser Object
                         function mapToObject($file) {
                              $interestedUsrList = array();
                              foreach ($file as $line) {
                                  $instance = InterestUser::initUsingFileLines($line);
                                  array_push($interestedUsrList, $instance); 
                              }
                              return $interestedUsrList;
                          }
                         //group serial number using associative arrays
                         function groupSerialNumber($oldList) {
                              $myNewList = array();
                              foreach ($oldList as $instance) {
                                  $serialNo = $instance->serialnumber;
                                  //if key exist - group them together
                                  if(array_key_exists($serialNo , $myNewList)) {
                                      array_push($myNewList[$serialNo], $instance);
                                  }
                                  //else initialise the array
                                  else {
                                      $initArray = array();
                                      $initArray[] = $instance;
                                      $myNewList[$serialNo] = $initArray;
                                  }

                              }
                              return $myNewList;
                          }
                          //find serial key
                          function findSerialKey($bikeId,$array) {
                              //if exist return counter
                              if(array_key_exists($bikeId, $array)) {
                                return $array[$bikeId];
                              }
                              else {
                                return array();
                              }
                          }

                          //1. get the file directory
                          $ExpInterestFile = $file;
                          //2. explode each line from file so as each line will be an array
                          $bikeIdList = mapToObject($ExpInterestFile);
                          //3. group same serial number and convert it into an assoc array
                          $bikeIdList = groupSerialNumber($bikeIdList);
                          //4. if serialNo in list return list, otherwise return blank list
                          $result = findSerialKey($bikeId,$bikeIdList);
                          return $result; 
                      }

$result = retireveData('2 - bike id here',$file);

echo print_r($result);



echo "\n";
echo "\n";
echo "\n";

?>
