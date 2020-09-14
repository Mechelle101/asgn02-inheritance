<?php

class Animal {
    var $legs;
    var $can_fly;

    function animal_characteristics() {
        return $this->legs . ", " . $this->can_fly;
    }
}

class Dog extends Animal {

}

class Bird extends Animal {

}

$fish = new Animal;
$fish->legs = 0;
$fish->can_fly = false;

$husky = new Dog;
$husky->legs = 4;
$husky->can_fly = false;

$robin = new Bird;
$robin->legs = 2;
$robin->can_fly = true;

echo $fish->animal_characteristics() . '<br>';
echo $husky->animal_characteristics() . '<br>';
echo $robin->animal_characteristics() . '<br>';

echo get_parent_class($fish) . '<br>';
echo get_parent_class($husky) . '<br>';
echo get_parent_class($robin) . '<br>';

if(is_subclass_of($fish, 'Animal')) {
    echo "Instance is a subclass of Animal. <br>";
}

if(is_subclass_of($husky, 'Dog')) {
    echo "Instance is a subclass of Animal. <br>";
}

if(is_subclass_of($robin, 'Bird')) {
    echo "Instance is a subclass of Animal. <br>";
}

$parents = class_parents($robin);
echo implode(', ', $parents) . '<br>';

$parents = class_parents($husky);
echo implode(', ', $parents) . '<br>';

$parents = class_parents($fish);
echo implode(', ', $parents) . '<br>';


?>