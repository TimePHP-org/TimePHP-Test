<?php

require __DIR__ . "/vendor/autoload.php";


$lines = file('./test.php', FILE_IGNORE_NEW_LINES);
$content = [];
foreach($lines as $line){
   $content[] = rtrim($line, "\t");
}

$content = array_filter($content, function($element) {
   return !empty($element);
});


file_put_contents("./test2.php", implode("\n", $content));