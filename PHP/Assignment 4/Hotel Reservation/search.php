<?php

if(isset($_POST["search"])){

    $nbRooms = $_POST["room_numberof"];

    $locations = array();
    if(isset($_POST["downtown"])){
        array_push($locations,$_POST["downtown"]);
    }
    if(isset($_POST["montreal_east"])){
        array_push($locations,$_POST["montreal_east"]);
    }
    if(isset($_POST["montreal_west"])){
        array_push($locations,$_POST["montreal_west"]);
    }
    if(isset($_POST["near_airport"])){
        array_push($locations,$_POST["near_airport"]);
    }
    if(isset($_POST["oldport"])){
        array_push($locations,$_POST["oldport"]);
    }
    if(isset($_POST["idc"])){
        array_push($locations,$_POST["idc"]);
    }


    $special_facilities = array();
    if(isset($_POST["minibar"])){
        array_push($special_facilities,$_POST["minibar"]);
    }
    if(isset($_POST["balcony"])){
        array_push($special_facilities,$_POST["balcony"]);
    }
    if(isset($_POST["pool"])){
        array_push($special_facilities,$_POST["pool"]);
    }
    if(isset($_POST["water_front"])){
        array_push($special_facilities,$_POST["water_front"]);
    }
    if(isset($_POST["garden_front"])){
        array_push($special_facilities,$_POST["garden_front"]);
    }

    if(isset($_POST["private_parking_radio"])){

        $nbParking = $_POST["private_parking_radio"];

    }

    if(isset($_POST["price_per_night"])){

        $price_per_night = $_POST["price_per_night"];

    }

    $hotel_file = fopen("hotel_info.txt","r");
    $found = false;

    while(!feof($hotel_file) && !$found){

        $hotelInfoArray = explode(":",fgets($hotel_file));

        $currentNbRooms = $hotelInfoArray[0];
        $currentLocation = $hotelInfoArray[1];
        $currentFacility = $hotelInfoArray[2];
        $currentNbParking = $hotelInfoArray[3];
        $currentPrice = $hotelInfoArray[4];

        if($nbRooms == $currentNbRooms && (in_array($currentLocation,$locations) || in_array(-1,$locations)) && in_array($currentFacility,$special_facilities) && $nbParking == $currentNbParking && ($price_per_night == $currentPrice || $price_per_night == -1)){

            $found = true;

            if ($currentLocation == 0){
                $location_name = "Downtown";
            }
            if ($currentLocation == 1){
                $location_name = "Montreal East";
            }
            if ($currentLocation == 2){
                $location_name = "Montreal West";
            }
            if ($currentLocation == 3){
                $location_name = "Near Airport";
            }
            if ($currentLocation == 4){
                $location_name = "Old Port";
            }

            if ($currentFacility == 0){
                $facility_name = "Minibar";
            }
            if ($currentFacility == 1){
                $facility_name = "Balcony";
            }
            if ($currentFacility == 2){
                $facility_name = "Pool";
            }
            if ($currentFacility == 3){
                $facility_name = "Water Front";
            }
            if ($currentFacility == 4){
                $facility_name = "Garden Front";
            }

            echo "Found a match with a hotel located ".$location_name." with ".$currentNbRooms." room(s), costs less than ".$currentPrice."$ per night, has ".$currentNbParking." parking spots and also has a ".$facility_name." as a bonus.";

        }else{

            echo "No match was found";

        }


    }

    fclose($hotel_file);






}
