<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "User.php";
include "menu.php";

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$arr = getGoods($DB->getConnection(), 'CAMERAS');
$products = array();
foreach ($arr as $product) {
    $values = array();

    $values[] = render('forms/image', array('ref'=>'editCamera.php', 'id'=>$product['id'], 'image'=>$product['image']));
    $values[] = $product['name'];
    $values[] = $product['quantity'];
    $values[] = $product['total_mp_quantity'];
    $values[] = $product['matrix_type'];
    $values[] = $product['price'];

    $products[] = $values;
}

$productTable = render('forms/productTable', array('products'=>$products, 'titles'=>
    array('','Название товара','В наличии','Количество мегапикселей (общее)',
        'Тип матрицы', 'Цена')));

$menuItems = getEditMenuItems('cameras');
$menu = render('forms/menu', array('items' => $menuItems));

$footer = render('forms/button', array('ref'=>"addGood.php?table=CAMERAS", 'title'=>'Добавить новый товар'));

echo render('goods', array('cap'=>$footer,'footer'=>'', 'menu' => $menu, 'page'=>'cameras',
    'productTable'=>$productTable, 'title'=>'Admin_Фотоаппараты'));