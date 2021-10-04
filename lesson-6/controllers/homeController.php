<?php

function homeController()
{
  return render('home', [
    'title' => 'Главная страница'
  ]);
}
