<?php

// normal array and looping through it
// $names = [
//   'Jeff',
//   'John',
//   'Mary' ];
// foreach ($names as $name) {
//   echo $name . ',';
// }


// associative array
$person = [
  'age' => 31,
  'hair' => 'brown',
  'job' => 'web developer'
];
// pushing to array
$person['name'] = 'Ade';

// removing from array
unset($person['age']);




require 'index.view.php';
