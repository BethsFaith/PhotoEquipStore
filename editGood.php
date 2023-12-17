<?php

include "connect.php";
include "functions.php";
include "User.php";
include "menu.php";

$name = $_POST["name"];
$content = $_POST["content"];
$table = $_GET['table'];
$id = $_GET['id'];

echo $name;
echo $content;
echo $table;

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$res = updateGoodProperty($DB->getConnection(), $id, $name, $content, $table);
echo $res ? "Изменения сохранены" : "Произошла ошибка во время сохранения" ;