<?php

include "connect.php";
include "menu.php";
include "DBFunc.php";
include 'templateFunc.php';

$table = $_GET['table'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$properties = getProperties($DB->getConnection(), $table);
$product = array();
foreach ($properties as $value) {
    if ($value != 'id') {
        $product["$value"] = '';
    }
}

$menuItems = getEditMenuItems('CAMERAS');
$menu = render('forms/menu', array('items'=>$menuItems));

echo render('createGood', array('product'=>$product, 'table'=>$table, 'menu'=>$menu,
    'cap'=>'', 'footer'=>''));