<?php

/* Работаем в 2.php. Задача - вывести все фотографии на экран, что есть в папке img. */

include __DIR__ . '/function-time-data.php';

$animalsPhotoPath = 'images'; // путь до файлов

$arrayPath = scandir($animalsPhotoPath);
var_dump($arrayPath); // вывод файлов в папке images
