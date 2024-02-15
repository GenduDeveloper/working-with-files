<?php

/* В файле 1.php сохранить в массив имена файлов фотографий.
 Используя данные в массиве вывести все фотографии на экран. */

include __DIR__ . '/function-time-data.php';

$animals = [
    'bunny' => 'images/bunny.jpg',
    'hedgehog' => 'images/hedgehog.jpg',
    'squirrel' => 'images/squirrel.jpg'
]; // массив с именами файлов

foreach ($animals as $animal => $pathPhoto) {
    echo "<img src='{$pathPhoto}' alt='{$animal}'><br>";
} // вывод фотографий
