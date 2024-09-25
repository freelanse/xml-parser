<?php
// URL с курсами валют
$url = 'https://nbt.tj/ru/kurs/rss.php';

// Получаем данные с удаленного сервера
$xmlData = file_get_contents($url);

// Проверяем, удалось ли получить данные
if ($xmlData === false) {
    die('Ошибка получения данных с сервера.');
}

// Устанавливаем заголовки для разрешения CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/xml');

// Выводим данные, полученные с сервера
echo $xmlData;
?>
