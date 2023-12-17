<?php

include "connect.php";
include "functions.php";
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

    $values[] = '<a href="editCamera.php?id=' . $product['id'] . '">' .
        '<img src="' . $product['image'] . '" height="100" width="100">' . '</a>';
    $values[] = $product['name'];
    $values[] = $product['quantity'];
    $values[] = $product['total_mp_quantity'];
    $values[] = $product['matrix_type'];
    $values[] = $product['price'];

    $products[] = $values;
}

$productTable = render('productTable', array('products'=>$products, 'titles'=>
    array('','Название товара','В наличии','Количество мегапикселей (общее)',
        'Тип матрицы', 'Цена')));

$menuItems = getEditMenuItems('cameras');
$menu = render('menu', array('items' => $menuItems));

echo render('goods', array('cap'=>'','footer'=>' ', 'menu' => $menu, 'page'=>'cameras',
    'productTable'=>$productTable, 'title'=>'Admin_Фотоаппараты'));