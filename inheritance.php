<?php

class Animal {
    public $legs;
    public $can_fly;

    public function animal_characteristics() {
        return $this->legs . '. ' . ' Can fly? ' . $this->can_fly;
    }
}

class Dog extends Animal {
    public $can_howl;
    public $likes_cold_weather;


    public function dog_characteristics() {
        return $this->can_howl . ' can howl '; 
    }
}

class Bird extends Animal {
    public $speed;

    public function flight_speed() {
        return 'can fly ' . $this->speed;
    }
}

$fish = new Animal;
$fish->legs = 0;
$fish->can_fly = 'no';

echo 'The number of legs a fish has is ' . $fish->animal_characteristics() . '<br>';

echo '<hr>';

$husky = new Dog;
$husky->legs = 4;
$husky->can_fly = 'no';
//$husky->$likes_cold_weather = 'yes';
$husky->name = 'Elsa';
$husky->can_howl = 'yes';

echo "The Husky's name is " . $husky->name . ' and ' . '<br>';
echo 'The number of legs she has is ' . $husky->animal_characteristics() . '<br>';
echo $husky->name . ', ' . $husky->dog_characteristics() . '<br>';

echo '<hr>';

$houndDog = new Dog;
$houndDog->legs = 4;
$houndDog->can_fly = 'no';
//$houndDog->$likes_cold_weather = 'no';
$houndDog->name = 'Hyde';
$houndDog->can_howl = 'yes';

echo "The Hound dog's name is " . $houndDog->name . ' and ' . '<br>';
echo 'The number of legs she has is ' . $houndDog->animal_characteristics() . '<br>';
echo $houndDog->name . ', ' . $houndDog->dog_characteristics() . '<br>';

echo '<hr>';

$hummingbird = new Bird;
$hummingbird->legs = 2;
$hummingbird->can_fly = 'yes';
$hummingbird->speed = '49 mph';

echo 'The number of legs a bird has is ' . $hummingbird->animal_characteristics() . '<br>';
echo 'The hummingbird ' . $hummingbird->flight_speed();

?>