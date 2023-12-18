<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "User.php";
include "menu.php";

$page = $_GET['page'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$id = getPageId($DB->getConnection(), $page);
$arr = getPageElements($DB->getConnection(), $id);
$items = array();

foreach ($arr as $key=>$value) {
    $items[] = array("name"=>$value->name,'content'=>$value->content);
}

$menuItems = getEditMenuItems($page);

$menu = render('forms/menu', array('items' => $menuItems));

echo render('edit', array('cap'=>'','menu' => $menu, 'items'=>$items, 'action'=>"updatePage.php?page=$page"));