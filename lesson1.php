<?php
// -------------------------------------------//
//  Lesson 1.3 - Constants & Variable Variables//
// -------------------------------------------//

//// DEFINE CONSTANTS ////
// use for static data that will not change

// default way to define constant
define('STATUS_PAID', 'paid'); // this way it is defined at run time 

// second way to define constant
const STATUS_PRODUCT = 'checkout'; // this way it is defined at compile time

echo STATUS_PAID . '</br>' . STATUS_PRODUCT;
echo '</br>';

// Built in predefined constants

echo PHP_VERSION;
echo '</br>';

// Magic constants can change depending where they are used 

echo __FILE__;
echo '</br>';


//// SIMPLE VARABLE VARIABLE EXAMPLE////
// Takes the value of the variable and treats that as the new name of the new variable

$foo = 'bar';
$$foo = 'baz';

echo $foo . ' ' . $bar;



// -------------------------------------------//
//  Lesson 1.4 - Data Types & Casting//
// -------------------------------------------//