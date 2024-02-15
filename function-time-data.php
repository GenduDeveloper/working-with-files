<?php

/* Создать функцию,
 которая будет при каждом запросе файла 2.php и 1.php сохранять в файл log.txt данные о времени запроса. */

function saveRequestTime(): int
{
    date_default_timezone_set('Asia/Irkutsk');
    $dateAndTimeOutput = date('d-m-Y H:i') . PHP_EOL;
    return file_put_contents('log.txt', $dateAndTimeOutput, FILE_APPEND);
}

saveRequestTime();
