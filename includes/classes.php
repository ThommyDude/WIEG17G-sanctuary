<?php

abstract class Attraction {
    public abstract function getAttractionName();
    
    public function echoInputElement() {
        echo $this->getAttractionName().": <input type='number' name='".$this->getAttractionName()."'>";
    }
}

abstract class Animal extends Attraction {
    public abstract function makeSound();
}

class Tiger extends Animal {
    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Tiger";
            case "en":
                return "Tiger";
        }
    }

    public function makeSound() {
        echo "raaaawgh";
    }
}

class Monkey extends Animal {
    
    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Apa";
            case "en":
                return "Monkey";
        }
    }

    public function makeSound() {
        echo "oahahahah";
    }
}

class Giraf extends Animal {

    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Giraff";
            case "en":
                return "Giraf";
        }
    }

    public function makeSound() {
        echo "hiyaa";
    }
}

class Coconut extends Attraction {
    public function getAttractionName() {
        switch (LANGUAGE) {
            case "sv":
                return "Kokosnöt";
            case "en":
                return "Coconut";
        }
    }
}