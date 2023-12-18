<?php

require_once "connect.php";
include "templateFunc.php";
include "User.php";
include "menu.php";

$name = $_POST["name"];
$content = $_POST["content"];
$table = $_GET['table'];
$id = $_GET['id'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$res = updateGoodProperty($DB->getConnection(), $id, $name, $content, $table);
echo $res ? "Изменения сохранены" : "Произошла ошибка во время сохранения" ;

$menuItems = getEditMenuItems('CAMERAS');
$menu = render('forms/menu', array('items'=>$menuItems));

echo $menu;
