<?php

require_once "connect.php";
include "menu.php";
include 'templateFunc.php';
include "DBFunc.php";

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$cap = render('forms/cap');
$footer = render('forms/footer');

$menuItems = getCommonMenuItems('CAMERAS');
$menu = render('forms/menu', array('items'=>$menuItems));

$product = getGoodById($DB->getConnection(), 'CAMERAS', $_GET['id']);

echo render('camera', array('cap'=>$cap, 'footer'=>$footer, 'menu'=>$menu, 'product'=>$product));