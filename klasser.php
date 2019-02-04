<?php

abstract class animal {
    protected $type;
    public $image;

    abstract public function makeSound();

    function __construct($type, $image) 
    {
        $this->type = $type;
        $this->image = $image;
    }
}

class apa extends animal {

    function __construct($type, $image) 
    {
        parent::__construct($type, $image);
    }

    public function makeSound()
    {
        $aSound = 'OOOoooOO';
        return $aSound;
    }
}

class giraff extends animal {

    function __construct($type, $image) 
    {
        parent::__construct($type, $image);
    }

    public function makeSound()
    {
        $aSound = 'Oui Oui';
        return $aSound;
    }
}

class tiger extends animal {

    function __construct($type, $image) 
    {
        parent::__construct($type, $image);
    }

    public function makeSound()
    {
        $aSound = 'RAWR';
        return $aSound;
    }
}

abstract class fruit {
    private $fruit;
    public $fruitImg;

    function __construct($fruit, $fruitImg) {
        $this->fruit = $fruit;
        $this->fruitImg = $fruitImg;
    }

    abstract public function itTastesLike();
}

class coconut extends fruit {
    function __construct($fruit, $fruitImg) 
    {
        parent::__construct($fruit, $fruitImg);
    }

    public function itTastesLike() {
        $aTaste = "Sweet!";
        return $aTaste;
    }
}

$animalOne = new apa ('APA', "<img src='images/apa.jpg' />");
$apeSound = $animalOne->makeSound(); 

$animalTwo = new giraff ("Giraff", "<img src='images/giraff.jpg'/>");
$giraffSound =  $animalTwo->makeSound();

$animalThree = new tiger ("Tiger", "<img src='images/tiger.jpg' />");
$tigerSound = $animalThree->makeSound();

$fruitOne = new coconut ("Kokosnöt", "<img src='images/coconut.jpg' />");
$cocoTaste = $fruitOne->itTastesLike();

require ("rdmnames.php");

if($setPost = $_POST['apor']) {
    for($i = 1; $i<=$setPost; $i++) {
        $image = $animalOne->image;
        ?> <p onclick="clickApe()"><?=$image ?></p> <?php
    }
};

if($setPost2 = $_POST['giraffer']) {
    for($i = 1; $i<=$setPost2; $i++) {
        $image = $animalTwo->image;
        ?> <p onclick="clickGiraff()"><?=$image ?></p> <?php
    }
};

if($setPost3 = $_POST['tigrar']) {
    for($i = 1; $i<=$setPost3; $i++) {
        $image = $animalThree->image;
        ?> <p onclick="clickTiger()"><?=$image ?></p> <?php
    }
};

if($setPost4 = $_POST['kokos']) {
    for($i = 1; $i<=$setPost4; $i++) {
        $image = $fruitOne->fruitImg;
        ?> <p onclick="clickCoco()"><?=$image ?></p> <?php
    }
};
?>

<script type="text/javascript">

function clickApe() {
    var rdmName = <?php echo json_encode(randomName()) ?>;
    var apeSound = <?php echo json_encode($apeSound) ?>;
    alert(rdmName + apeSound);
}

function clickGiraff() {
    var rdmName = <?php echo json_encode(randomName()) ?>;
    var giraffSound = <?php echo json_encode($giraffSound) ?>;
    alert(rdmName + giraffSound);
}

function clickTiger() {
    var rdmName = <?php echo json_encode(randomName()) ?>;
    var tigerSound = <?php echo json_encode($tigerSound) ?>;
    alert(rdmName + tigerSound);
}

function clickCoco() {
    var rdmName = <?php echo json_encode(randomName()) ?>;
    var cocoTaste = <?php echo json_encode($cocoTaste) ?>;
    alert(cocoTaste);
}

</script>