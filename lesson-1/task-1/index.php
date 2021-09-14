<?php
$a = 5;
$b = '05';

var_dump($a == $b); // Почему true?
/*
  $a == intiger
  $b приводится в intiger и получается 5
*/

var_dump((int)'012345'); // Почему 12345?
// При привелении в integer строка '012345' получается число 12345

var_dump((float)123.0 === (int)123.0); // Почему false?
/*
  Разные типы
  float 123.0
  int 123
*/

var_dump((int)0 === (int)'hello, world'); // Почему true?
// Строка с привелением в integer возвращает 0
?>
