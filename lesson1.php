<?php
// -------------------------------------------//
//  Constants & Variable Variables//
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
echo "Line number is" . __FILE__;
echo '</br>';


//// SIMPLE VARABLE VARIABLE EXAMPLE////
// Takes the value of the variable and treats that as the new name of the new variable

$foo = 'bar';
$$foo = 'baz';

echo $foo . ' ' . $bar;



// -------------------------------------------//
//  Data Types & Casting//
// -------------------------------------------//

# Scalar Types = bool , int, float, iterable

# TIP >> To return what the type the variable is, use the function gettype()

# TIP >> var_dump() function provides the variable type and the values it has

//// STRICT TYPE AND TYPE CASTING ////

# declare(strict_types=1);

# Type Casting
// change string 5 into interger 5
$x = (int) '5';
var_dump($x);


// ----------------------------------------------------------------//
/// Array Data Type - Indexed, Associative & Multi-Dimensional Arrays
// ----------------------------------------------------------------//


$languages = ['PHP', 'Java', 'Python'];
$languages[1] = 'C++'; // Update and index item with new value


// TIP >> Using print are with html pre tags formats the result
echo '<pre>';
print_r($languages);
echo '<pre>';

echo "There are " . count($languages) . " items in the array "; // number of items in array

$languages[] = 'Rust'; // push item to end of array array

array_push($languages, 'SQL', 'C#', 'GO'); // mutates array and add extra items

echo '<pre>';
print_r($languages);
echo '<pre>';