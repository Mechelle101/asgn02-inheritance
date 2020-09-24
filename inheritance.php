<?php

class Animal {
    public $legs;
    public $can_fly;

    public function animal_characteristics() {
        return $this->legs . '. ' . ' Can it fly? ' . $this->can_fly;
    }
}

class Dog extends Animal {
    public $tail; 

    public function tail_wags() {
        echo "Dogs tail wags"; 
    }
}

class Bird extends Animal {
    //public; 

    // public function 
}

$fish = new Animal;
$fish->legs = 0;
$fish->can_fly = 'no';

$husky = new Dog;
$husky->legs = 4;
$husky->can_fly = 'no';
$husky->tail_wags();

$robin = new Bird;
$robin->legs = 2;
$robin->can_fly = 'yes';

echo 'The number of legs a fish has is ' . $fish->animal_characteristics() . '<br>';
echo 'The number of legs a dog has is ' . $husky->animal_characteristics() . '<br>';
echo 'The number of legs a bird has is ' . $robin->animal_characteristics() . '<br>';

?>