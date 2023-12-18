<?php

require_once "connect.php";
include "templateFunc.php";
include "User.php";
include "menu.php";

$name = $_POST["name"];
$content = $_POST["content"];
$page = $_GET['page'];

echo $name;
echo $content;
echo $page;

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$page_id = getPageId($DB->getConnection(), $page);
$res = updatePageElement($DB->getConnection(), $page_id, $name, $content);
echo $res ? "Изменения сохранены" : "Произошла ошибка во время сохранения" ;