<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "User.php";
include "menu.php";

$login = $_GET['login'];
if (isset($_COOKIE['user'])) {
    $cashLogin = $_COOKIE['user'];
    if ($cashLogin == $login) {

        $DB = getDB();
        if (!$DB->isOpen()) {
            return;
        }

        $arr = getGoods($DB->getConnection(), 'CAMERAS');
        $products = array();
        foreach ($arr as $product) {
            $values = array();

            $id = $product['id'];
            $values[] = render('forms/image',
                array('ref' => "displayEditingCamera.php?id=$id&login=$login",
                'image' => $product['image']));
            $values[] = $product['name'];
            $values[] = $product['quantity'];
            $values[] = $product['total_mp_quantity'];
            $values[] = $product['matrix_type'];
            $values[] = $product['price'];

            $products[] = $values;
        }

        $productTable = render('forms/productTable', array('products' => $products, 'titles' =>
            array('', 'Название товара', 'В наличии', 'Количество мегапикселей (общее)',
                'Тип матрицы', 'Цена')));

        $menuItems = getEditMenuItems('CAMERAS', $login);
        $menu = render('forms/menu', array('items' => $menuItems));

        $cap = render('forms/button', array('ref' => "addGood.php?table=CAMERAS&login=$login", 'title' => 'Добавить новый товар'));

        echo render('goods', array('cap' => $cap, 'footer' => '', 'menu' => $menu, 'page' => 'cameras',
            'productTable' => $productTable, 'title' => 'Admin_Фотоаппараты', 'style' => "styles/editstyle.css"));

        return;
    }
}
echo render('adminPanel', array('menu'=>'', '_SESSION'=>''));