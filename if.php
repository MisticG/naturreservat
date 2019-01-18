<?php

if($setPost = $_POST['apor']) {
    for($i = 1; $i<=$setPost; $i++) {
        echo $animalOne->animalImage()[$i] . "<br>";
    }
    echo $animalOne->makeSound();
};

if($setPost = $_POST['giraffer']) {
    for($i = 1; $i<=$setPost; $i++) {
        echo $animalTwo->animalImage()[$i] . "<br>";
    }
    echo $animalTwo->makeSound();
};

if($setPost = $_POST['tigrar']) {
    for($i = 1; $i<=$setPost; $i++) {
        echo $animalThree->animalImage()[$i] . "<br>";
    }
    echo $animalThree->makeSound();
};

if($setPost = $_POST['kokos']) {
    for($i = 1; $i<=$setPost; $i++) {
        echo $fruitOne->fruitImg()[$i] . "<br>";
    }
    echo $fruitOne->makeSound();
};

?>