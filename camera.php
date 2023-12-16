<?php

require_once "connect.php";
include 'functions.php';

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$cap = render('cap');
$footer = render('footer');

$menuItems = getMenuItems('cameras');
$menu = render('menu', array('items'=>$menuItems));

$product = getProductById($DB->getConnection(), 'CAMERAS', $_GET['id']);

echo render('camera', array('cap'=>$cap, 'footer'=>$footer, 'menu'=>$menu, 'product'=>$product));