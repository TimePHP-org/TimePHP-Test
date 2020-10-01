<?php

// require __DIR__ . "/vendor/autoload.php";

// if(class_exists("TimePHP\Foundation\Router")){
//    echo "Router exists";
// } else{
//    echo "Router doesn't exists";
// }


$values = [
   ["a","b","c","d"],
   ["a","b","c","d"]
];

$newValues = array_map(function($element) {
   return json_decode($element);
}, array_unique(array_map(function($element) {
   return json_encode($element);
}, $values)));

var_dump($values, $newValues);
