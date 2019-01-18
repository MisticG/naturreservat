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

    abstract class animal {
        protected $animalType;
        protected $animalImage;
        public abstract function makeSound();

        function __construct($animalType, $makeSound, $animalImage) {
            $this->animalType = $animalType;
            $this->sound = $makeSound;
            $this->animalImg = $animalImage;
        }
    }

    class apa extends animal {

        function animalType() {
            echo $this->animalType;
        }

        function makeSound() {
            echo $this->sound;
        }

        function animalImage() {
            echo $this->animalImg;
        }
    }
        
    class giraff extends animal {

        public function animalType() {
            echo $this->animalType;
        }

        function makeSound() {
            echo $this->sound . "<br>";
        }

        function animalImage() {
            echo $this->animalImg . "<br>";
        }
    }

    class tiger extends animal {

        public function animalType() {
            echo $this->animalType;
        }

        function makeSound() {
            echo $this->sound . "<br>";
        }

        function animalImage() {
            echo $this->animalImg . "<br>";
        }
    }

    class fruit {
        private $fruit;
        private $fruitImg;
        function __construct($fruit, $fruitImg, $makeSound) {
            $this->fruit = $fruit;
            $this->fruitImg = $fruitImg;
            $this->sound =  $makeSound;
        }

        function fruit() {
            echo $this->fruit;
        }

        function fruitImg() {
            echo $this->fruitImg;
        }

        function makeSound() {
            echo $this->sound;
        }
    }

$animalOne = new apa ("Apa", "OOoooooOO", "<img src='images/apa.jpg' />");
$animalTwo = new giraff ("Giraff", "OUIiiii oui", "<img src='images/giraff.jpg'/>");
$animalThree = new tiger ("Tiger", "RRAAAAAWWWRR", "<img src='images/tiger.jpg' />");
$fruitOne = new fruit ("Kokosnöt", "DUNK!...aj.", "<img src='images/coconut.jpg' />");

require "if.php";
 
?>

</body>
</html>
