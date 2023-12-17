<?php

include "connect.php";
include "functions.php";
include "User.php";
include "menu.php";

/*$login = $_GET["login"];

$user = new User();*/

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$id = getPageId($DB->getConnection(), 'MAIN_PAGE');
$arr = getPageElements($DB->getConnection(), $id);
$items = array();

foreach ($arr as $key=>$value) {
    $items[] = array("name"=>$value->name,'content'=>$value->content);
}

$menuItems = getEditMenuItems('mainPage');

$menu = render('forms/menu', array('items' => $menuItems));

echo render('edit', array('menu' => $menu, 'items'=>$items, 'action'=>"editPage.php?page=MAIN_PAGE"));