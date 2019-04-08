<?php

$is_console = (isset($argv));
$line_breaker = $is_console ? PHP_EOL : '<br>';

   if ($is_console){
       if (!isset($argv[1])){
           die ('Day is empty. Enter argument between 1 and 7' . $line_breaker);
       }
       $day = $argv['1'];
   }
  else {
      if (!isset($_GET ['day'])){
       die ('Enter number of the day between 1 and 7');
      }
      $day = $_GET ['day'];
  }

switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo ('Working day');
        break;
    case 6:
    case 7:
        echo 'Weekend';
        break;
     default:
     echo 'No day of the week';
}