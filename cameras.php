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

$arr = getProducts($DB->getConnection(), 'CAMERAS');
$products = array();
foreach ($arr as $product) {
    $values = array();

    $values[] = '<a href="camera.php?id=' . $product['id'] . '">' .
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

echo render('cameras', array('cap'=>$cap, 'footer'=>$footer, 'menu'=>$menu, 'productTable'=>$productTable));