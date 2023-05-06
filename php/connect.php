<?php

$db = new mysqli('localhost', 'root', '', 'garage');
if(!$db) {
    die('Connection error: ' . mysqli_error());
}

mysqli_set_charset($db, "utf8") or die('Не установлена кодировка');
?>
