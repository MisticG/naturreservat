<?php 

function randomName() {
    $addName = array(
        '0'=>"Anton",
        '1'=>"Johan",
        '2'=>"Ranchi",
        '3'=>"Seb",
        '4'=>"Rob",
        '5'=>"David",
        '6'=>"Samer",
        '7'=>"Ali",
        '8'=>"Henric",
        '9'=>"Alex"
    );


    $arrIndex = rand(0, 9);
    return $addName[$arrIndex];
}
?>