<?php

require_once "connect.php";
include 'templateFunc.php';
include "DBFunc.php";
include "menu.php";

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$cap = render('forms/cap');
$footer = render('forms/footer');

$menuItems = getCommonMenuItems('CAMERAS');
$menu = render('forms/menu', array('items'=>$menuItems));

$arr = getGoods($DB->getConnection(), 'CAMERAS');
$products = array();
foreach ($arr as $product) {
    $values = array();

    $id = $product['id'];
    $values[] = render('forms/image',
        array('ref' => "camera.php?id=$id&login=$login&table=CAMERAS",
            'image' => $product['image']));
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

echo render('goods', array('cap'=>$cap, 'footer'=>$footer, 'menu'=>$menu, 'productTable'=>$productTable,
    'title'=>'Фотоаппараты', 'style'=>"styles/style.css"));