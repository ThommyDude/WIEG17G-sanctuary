<?php

abstract class Attraction {
    public abstract function getAttractionName();
    public abstract function getAttractionImage();
    
    public function echoInputElement() {
        echo $this->getAttractionName().": <input type='number' name='".$this->getAttractionName()."'>";
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

    public function onClickCode() {
        return "alert(\"".$this->makeSound()."\")";
}
}

class Tiger extends Animal {
    public function getAttractionImage() {
        return "tiger.jpg";
    }

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Tiger";
            case "en":
                return "Tiger";
        }
    }

    public function makeSound() {
        return "raaaawgh";
    }
}

class Monkey extends Animal {
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