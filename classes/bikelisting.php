<?php

class BikeListing {
    //personal information
    public $name; //string
    public $phone; // string
    public $email; // string
    //bike information
    public $title; //string -> title of listing
    public $serialnumber; // string
    public $type; // string
    public $description; // string 50 characters only
    //bike details
    public $yearofmanufacture; // integer
    public $characteristics; // string (probably might use enum's)
    public $condition; // string (new , used)

    function __construct(
        $name,
        $phone,
        $email,
        $title,
        $serialnumber,
        $type,
        $description,
        $yearofmanufacture,
        $characteristics,
        $condition
    ) {
    $this->name = $name;
    $this->phone = $phone;
    $this->email = $email;
    $this->title = $title;
    $this->serialnumber = $serialnumber;
    $this->type = $type;
    $this->description = $description;
    $this->yearofmanufacture = $yearofmanufacture;
    $this->characteristics = $characteristics;
    $this->condition = $condition;
    }
    
    //generate serial number saperately instead of initialising on constructor to reduce initialisation timing
    public static function generateSerialNumber($year) {
        //extract the last two string characters using substring
        $year = substr(strval($year), 2, 2);
        //generate random number
        $number = rand(100,999);
        //genernate random characters
        $length = 3;    
        $threeletterchars = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

        $result = "${year}-${number}-${threeletterchars}";
        return $result;
    }
}

?>