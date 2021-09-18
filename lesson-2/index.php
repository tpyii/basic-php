<?php
  // 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
  // если $a и $b положительные, вывести а и б положительные;
  // если $а и $b отрицательные, вывести а и б отрицательные;
  // если $а и $b разных знаков, вывести а и б разных знаков;
  // Ноль можно считать положительным числом.

  $a = rand(-getrandmax(), getrandmax());
  $b = rand(-getrandmax(), getrandmax());

  if ($a >= 0 && $b >= 0) {
    echo 'а и б положительные';
  } elseif ($a < 0 && $b < 0) {
    echo 'а и б отрицательные';
  } else {
    echo 'а и б разных знаков';
  }

  // 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. При желании сделайте это задание через рекурсию.
  
  $a = rand(0, 15);

  switch ($a) {
    case 0:
      echo 0;
    case 1:
      echo 1;
    case 2:
      echo 2;
    case 3:
      echo 3;
    case 4:
      echo 4;
    case 5:
      echo 5;
    case 6:
      echo 6;
    case 7:
      echo 7;
    case 8:
      echo 8;
    case 9:
      echo 9;
    case 10:
      echo 10;
    case 11:
      echo 11;
    case 12:
      echo 12;
    case 13:
      echo 13;
    case 14:
      echo 14;
    case 15:
      echo 15;
  }

  function foo($a, $max = 15)
  {
    echo $a;

    if ($a < $max) foo(++$a);
  }

  foo($a);

  // 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. В делении проверьте деление на 0 и верните текст ошибки.

  function plus($a = 0, $b = 0)
  {
    return $a + $b;
  }

  function minus($a = 0, $b = 0)
  {
    return $a - $b;
  }

  function multiply($a = 0, $b = 0)
  {
    return $a * $b;
  }

  function divide($a = 0, $b = 0)
  {
    if ($a <= 0 || $b <= 0) {
      echo 'Ошибка: На ноль делить нельзя!';
      return;
    }

    return $a / $b;
  }

  // 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

  function mathOperation($arg1, $arg2, $operation)
  {
    switch ($operation) {
      case 'plus':
        return plus($arg1, $arg2);

      case 'minus':
        return minus($arg1, $arg2);

      case 'multiply':
        return multiply($arg1, $arg2);

      case 'divide':
        return divide($arg1, $arg2);
    }
  }

  // 5. Собрать страницу с меню и контентом, зарендерить как минимум 2 подшаблона через renderTemplate. ВАЖНОЕ

  function renderTemplate($page, $content = '')
  {
    ob_start();
    include $page . '.php';
    return ob_get_clean();
  }

  $menu = renderTemplate('menu');

  $about = renderTemplate('about', $menu);

  echo renderTemplate('layout', $about);
