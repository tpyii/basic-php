<?php
// Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.

$title = 'Главная страница - страница обо мне';
$h1 = 'Информация обо мне';
$year = date('Y');

include './template.php';
?>