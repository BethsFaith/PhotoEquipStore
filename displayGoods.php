<?php

require_once "connect.php";
include 'templateFunc.php';
include "DBFunc.php";
include "menu.php";

$goodType = $_GET['goodType'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$cap = render('forms/cap');
$footer = render('forms/footer');

$menuItems = getCommonMenuItems($goodType);
$menu = render('forms/menu', array('items'=>$menuItems));

$arr = getGoods($DB->getConnection(), $goodType );
$products = array();

$titles = array();
switch ($goodType) {
    case 'FLASHES':
        foreach ($arr as $product) {
            $values = array();

            $id = $product['id'];
            $values[] = render('forms/image',
                array('ref' => "displayGood.php?id=$id&table=$goodType",
                    'image' => $product['image']));
            $values[] = $product['name'];
            $values[] = $product['quantity'];
            $values[] = $product['type_bracing'];
            $values[] = $product['compatible_camera_model'];
            $values[] = $product['price'];

            $products[] = $values;
        }

        $titles = array('','Название товара','В наличии','Тип крепления',
            'Совместимость', 'Цена');

        break;
    case 'CAMERAS':
        foreach ($arr as $product) {
            $values = array();

            $id = $product['id'];
            $values[] = render('forms/image',
                array('ref' => "displayGood.php?id=$id&table=$goodType",
                    'image' => $product['image']));
            $values[] = $product['name'];
            $values[] = $product['quantity'];
            $values[] = $product['total_mp_quantity'];
            $values[] = $product['price'];

            $products[] = $values;
        }

        $titles = array('','Название товара','В наличии','К-во мп (общее)', 'Цена');
        break;
    case 'MEMORY_CARDS':
        foreach ($arr as $product) {
            $values = array();

            $id = $product['id'];
            $values[] = render('forms/image',
                array('ref' => "displayGood.php?id=$id&table=$goodType",
                    'image' => $product['image']));
            $values[] = $product['name'];
            $values[] = $product['quantity'];
            $values[] = $product['volume'];
            $values[] = $product['price'];

            $products[] = $values;
        }

        $titles = array('','Название товара','В наличии','Объем (гб)', 'Цена');
        break;
    case 'LENSES':
        foreach ($arr as $product) {
            $values = array();

            $id = $product['id'];
            $values[] = render('forms/image',
                array('ref' => "displayGood.php?id=$id&table=$goodType",
                    'image' => $product['image']));
            $values[] = $product['name'];
            $values[] = $product['quantity'];
            $values[] = $product['type'];
            $values[] = $product['focal_length_mm'];
            $values[] = $product['price'];

            $products[] = $values;
        }

        $titles = array('','Название товара','В наличии','Тип', 'Фокусное расстояние', 'Цена');
        break;
}

$productTable = render('forms/productTable', array('products'=>$products, 'titles'=>$titles));

echo render('goods', array('cap'=>$cap, 'footer'=>$footer, 'menu'=>$menu, 'productTable'=>$productTable,
    'title'=>'Вспышки', 'style'=>"styles/style.css"));