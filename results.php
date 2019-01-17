<?php

    abstract class animal {
        protected $animalType;
        abstract function makeSound();
    }

    class apa extends animal {
        private $name;
        public $sound;

        function __construct($animalType, $makeSound) {
            $this->animalType = $animalType;
            $this->sound = $makeSound;
        }

        public function animalType() {
            return $this->animalType;
        }

        function makeSound() {
            return "OOOoooOOO";
        }
    }
        
    class giraff extends animal {
        private $name;
        public $sound;

        function __construct($animalType, $makeSound) {
            $this->animalType = $animalType;
            $this->sound = $makeSound;
        }

        public function animalType() {
            return $this->animalType;
        }

        function makeSound() {
            return "Oui oui";
        }
    }

$animalOne = new apa ("Apa", "OOooOOOO");
$animalTwo = new giraff ("Giraff", "Oui oui");

echo $animalOne->makeSound() . "<br>";
echo $animalTwo->makeSound();
 
?>
