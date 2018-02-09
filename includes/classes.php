<?php

abstract class Attraction {
    public abstract function getAttractionName();
    public abstract function getAttractionImage();
    
    public function getClassName() {
        return get_class($this);
    }

    public function echoInputElement() {
        echo $this->getAttractionName().": <input type='number' name='".$this->getClassName()."'>";
    }

    public function onClickCode() {
            return "console.log(\"".$this->getAttractionName()." was pressed.\")";
    }

    public function echoImage() {
        echo "<img src='/images/".$this->getAttractionImage()."' alt='Kolla, en cool ".$this->getAttractionName()."' width='".rand(70, 140)."px;' onClick='".$this->onClickCode()."'/>";
    }
}

abstract class Animal extends Attraction {
    public abstract function makeSound();
    public $individualName; // $this->individualName

    public function __construct() {
        $index = rand(0, count(ALL_NAMES)-1);
        $this->individualName = ALL_NAMES[$index];
    }

    public function onClickCode() {
        $text = 'alert("';
        $text .= $this->individualName;
        $text .= ": ";
        $text .= $this->makeSound();
        $text .= '");';

        return $text;
}
}

class Tiger extends Animal {
    public function getAttractionImage() {
        return "tiger.jpg";
    }

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Sibirisk tiger";
            case "en":
                return "Sibirian tiger";
        }
    }

    public function makeSound() {
        return "raaaawgh";
    }
}
class Lion extends Animal {
    public function getAttractionImage() {
        return "lion.jpg";
    }

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Fint lejon";
            case "en":
                return "A nice lion";
        }
    }

    public function makeSound() {
        return "woooooooooooaaaaah";
    }
}

class Ape extends Animal {
    public function getAttractionImage() {
        return "monkey.jpg";
    }

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Apa";
            case "en":
                return "Monkey";
        }
    }

    public function makeSound() {
        return "oahahahah";
    }
}

class Giraf extends Animal {
    public function getAttractionImage() {
        return "giraf.png";
    }

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Giraff";
            case "en":
                return "Giraf";
        }
    }

    public function makeSound() {
        return "hiyaa";
    }
}

class Coconut extends Attraction {
    public function getAttractionImage() {
        return "coconut.jpeg";
    }

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Kokosnöt";
            case "en":
                return "Coconut";
        }
    }
}
class Rose extends Attraction {
    public function getAttractionImage() {
        return "rose.jpg";
    }

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Ros";
            case "en":
                return "Rose";
        }
    }
}