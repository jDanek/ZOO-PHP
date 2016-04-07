<?php

require 'Animal.php';
require 'Cat.php';
require 'Chicken.php';
require 'Dog.php';
require 'Farm.php';

//kun
$horse = new Animal();
$horse->setName('Semik');
$horse->setColor('Bila');
$horse->setSpeech('rehtani');
$horse->setAge(14);

//krava
$cow = new Animal();
$cow->setSpeech('buu');
$cow->setAge(5);

//pes
$dog = new Dog();
$dog->setName('Alik');
$dog->setColor('Cerna');
$dog->setAge(7);

//kocka
$cat = new Cat();
$cat->setName('Micka');
$cat->setColor('Oranzova');
$cat->setAge(5);
$cat->setToy('klubko');

//slepicka
$chicken = new Chicken();
$chicken->setName('Richard');
$chicken->setColor('Hneda');
$chicken->setSpeech('kokodak');

//kohout
$rooster = new Chicken();
$rooster->setName('cockadoodledoo');
$rooster->setColor('Fialová');
$rooster->setSpeech('kykyryky');

echo "Oblibena slepici jidla: " . implode(", ", Chicken::favoriteFood())."<br>";
echo "=========================================================================="."<br>";

// farma
$farm = new Farm();
$farm->addAnimal($horse)
    ->addAnimal($dog)
    ->addAnimal($cat)
    ->addAnimal($chicken)
    ->addAnimal($rooster)
;

echo "Pocet zvirat na farme: " . $farm->countAnimals()."<br>";

echo "=========================================================================="."<br>";
echo "<pre>";
var_dump($farm->getAnimals());
echo "<pre>";
echo "=========================================================================="."<br>";

//nakrmime
$farm->feedAnimals();
echo "NAKRMENO<br>";
echo "=========================================================================="."<br>";
echo "<pre>";
var_dump($farm->getAnimals());
echo "<pre>";
echo "=========================================================================="."<br>";

// jatka
$slaughterhouse = new Farm();
$slaughterhouse->addAnimal($cow);

echo "Pocet zvirat v jatkach: " . $slaughterhouse->countAnimals()."<br>";

echo "<pre>";
var_dump($slaughterhouse->getAnimals());
echo "<pre>";