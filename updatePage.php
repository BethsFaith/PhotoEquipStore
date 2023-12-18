<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "User.php";
include "menu.php";

$name = $_POST["name"];
$content = $_POST["content"];
$page = $_GET['page'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$page_id = getPageId($DB->getConnection(), $page);
$res = updatePageElement($DB->getConnection(), $page_id, $name, $content);
echo $res ? "Изменения сохранены" : "Произошла ошибка во время сохранения" ;

$menuItems = getEditMenuItems($page);
$menu = render('forms/menu', array('items' => $menuItems));
echo render('empty', array('menu'=>$menu));