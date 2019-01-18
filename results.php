<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.php" media="screen">
    <title>What animal are you?</title>
</head>
<body>

<?php

require "classes.php";

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

</body>
</html>
