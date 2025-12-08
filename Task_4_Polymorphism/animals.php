<?php

class Animal {
    public function makeSound() {
        return "Some generic sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}

$animals = [new Dog(), new Cat(), new Cow()];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "\n";
}
