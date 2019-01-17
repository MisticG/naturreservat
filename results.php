<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    abstract class animal {
        protected $animalType;
        abstract function makeSound();
        abstract function animalImage();
    }

    class animalApa extends animal {
        private $name;
        public $sound;

        function __construct($animalType, $makeSound, $animalImage) {
            $this->animalType = $animalType;
            $this->sound = $makeSound;
            $this->animalImg = $animalImage;
        }

        public function animalType() {
            return "APA";
        }

        function makeSound() {
            return "OOOoooOOO" . "<br>";
        }

        function animalImage() {
            echo "<img src='images/apa.jpg' />" . "<br>";
        }
    }
        
    class animalGiraff extends animal {
        private $name;
        public $sound;

        function __construct($animalType, $makeSound, $animalImage) {
            $this->animalType = $animalType;
            $this->sound = $makeSound;
            $this->animalImg = $animalImage;
        }

        public function animalType() {
            return "GIRAFF";
        }

        function makeSound() {
            return "Oui oui" . "<br>";
        }

        function animalImage() {
            echo "<img src='images/giraff.jpg'/>" . "<br>";
        }
    }

    
$animalOne = new animalApa ("apa", "sound", "image");
$animalTwo = new animalGiraff ("giraff", "sound", "image");

if($setPost = $_POST['apor']) {
    for($i = 1; $i<=$setPost; $i++) {
        echo $animalOne->animalImage()[$i];
    }
    echo $animalOne->makeSound();
};

if($setPost = $_POST['giraffer']) {
    for($i = 1; $i<=$setPost; $i++) {
        echo $animalTwo->animalImage()[$i];
    }
    echo $animalTwo->makeSound();
};
 
?>

</body>
</html>
