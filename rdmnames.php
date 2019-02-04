<?php 

function randomName() {

    $addName = array(
        '0'=>"Anton säger: ",
        '1'=>"Johan säger: ",
        '2'=>"Ranchi säger: ",
        '3'=>"Seb säger: ",
        '4'=>"Rob säger: ",
        '5'=>"David säger: ",
        '6'=>"Samer säger: ",
        '7'=>"Ali säger: ",
        '8'=>"Henric säger: ",
        '9'=>"Alex säger: "
    );

    $arrIndex = rand(0, 9);
    return $addName[$arrIndex];
}
?>