<?php

require __DIR__ . "/vendor/autoload.php";

if(class_exists("TimePHP\Foundation\Router")){
   echo "Router exists";
} else{
   echo "Router doesn't exists";
}