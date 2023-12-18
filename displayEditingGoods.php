<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "menu.php";

$login = $_GET['login'];
if (isset($_COOKIE['user'])) {
    $cashLogin = $_COOKIE['user'];
    if ($cashLogin == $login) {

        $DB = getDB();
        if (!$DB->isOpen()) {
            return;
        }

        $table = $_GET['table'];
        $arr = getGoods($DB->getConnection(), $table);
        $products = array();
        foreach ($arr as $product) {
            $values = array();

            $id = $product['id'];
            $values[] = render('forms/image',
                array('ref' => "displayEditingGood.php?id=$id&login=$login&table=$table",
                'image' => $product['image']));
            $values[] = $product['name'];
            $values[] = $product['quantity'];

            switch ($table) {
                case ('CAMERAS') :
                    $values[] = $product['total_mp_quantity'];
                    $values[] = $product['matrix_type'];
                    break;
                case ('FLASHES'):
                    $values[] = $product['bracing_type'];
                    $values[] = $product['compatible_camera_model'];
                    break;
                case ('MEMORY_CARDS'):
                    $values[] = $product['volume'];
                    break;
                case ('LENSES'):
                    $values[] = $product['type'];
                    $values[] = $product['focal_length_mm'];
                    break;
                default:
                    break;
            }
            $values[] = $product['price'];

            $products[] = $values;
        }

        $titles = null;
        switch ($table) {
            case ('CAMERAS') :
                $titles = array('','Название товара','В наличии','К-во мп (общее)', 'Цена');
                break;
            case ('FLASHES'):
                $titles = array('','Название товара','В наличии','Тип крепления',
                    'Совместимость', 'Цена');
                break;
            case ('MEMORY_CARDS'):
                $titles = array('','Название товара','В наличии','Объем (гб)', 'Цена');
                break;
            case ('LENSES'):
                $titles = array('','Название товара','В наличии','Тип', 'Фокусное расстояние', 'Цена');
                break;
            default:
                break;
        }

        $productTable = render('forms/productTable', array('products' => $products, 'titles' => $titles));

        $menuItems = getEditMenuItems('CAMERAS', $login);
        $menu = render('forms/menu', array('items' => $menuItems));

        $cap = render('forms/button', array('ref' => "addGood.php?table=$table&login=$login",
            'title' => 'Добавить новый товар'));

        echo render('goods', array('cap' => $cap, 'footer' => '', 'menu' => $menu, 'page' => 'cameras',
            'productTable' => $productTable, 'title' => 'AdminEdit', 'style' => "styles/editstyle.css"));

        return;
    }
}
echo render('adminPanel', array('menu'=>'', '_SESSION'=>''));