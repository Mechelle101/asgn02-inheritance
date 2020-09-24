<?php

class Animal {
    public $legs;
    public $can_fly;

    public function animal_characteristics() {
        return $this->legs . '. ' . ' Can it fly? ' . $this->can_fly;
    }
}

class Dog extends Animal {

}

class Bird extends Animal {

}

$fish = new Animal;
$fish->legs = 0;
$fish->can_fly = 'no';

$husky = new Dog;
$husky->legs = 4;
$husky->can_fly = 'no';

$robin = new Bird;
$robin->legs = 2;
$robin->can_fly = 'yes';

echo 'The number of legs a fish has is ' . $fish->animal_characteristics() . '<br>';
echo 'The number of legs a dog has is ' . $husky->animal_characteristics() . '<br>';
echo 'The number of legs a bird has is ' . $robin->animal_characteristics() . '<br>';

?>