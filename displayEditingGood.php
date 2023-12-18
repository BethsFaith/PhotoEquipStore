<?php

require_once "connect.php";
include "menu.php";
include 'templateFunc.php';
include 'DBFunc.php';

$id = $_GET['id'];
$login = $_GET['login'];
$table = $_GET['table'];

if (isset($_COOKIE['user'])) {
    $cashLogin = $_COOKIE['user'];
    echo $cashLogin;
    if ($cashLogin == $login) {
        $DB = getDB();
        if (!$DB->isOpen()) {
            return;
        }

        $menuItems = getEditMenuItems($table, $login);
        $menu = render('forms/menu', array('items'=>$menuItems));

        $product = getGoodById($DB->getConnection(), $table, $id);
        $items = array();

        $items[] = array("name"=>"name","title"=>'Модель','content'=>$product['name']);
        $items[] = array("name"=>"product_code","title"=>'Код','content'=>$product['product_code']);
        $items[] = array("name"=>"quantity","title"=>'В наличии','content'=>$product['quantity']);

        switch ($table) {
            case ('CAMERAS') :
                $items[] = array("name"=>'matrix_type',"title"=>'Тип матрицы','content'=>$product['matrix_type']);
                $items[] = array("name"=>'recording_format',"title"=>'Формат записи','content'=>$product['recording_format']);
                $items[] = array("name"=>'total_mp_quantity',"title"=>'Количество мегапикселей (общее)','content'=>$product['total_mp_quantity']);
                $items[] = array("name"=>'guarantee_years',"title"=>'Гарантия (лет)','content'=>$product['guarantee_years']);
                break;
            case ('FLASHES'):
                $items[] = array("name"=>'type',"title"=>'Тип','content'=>$product['type']);
                $items[] = array("name"=>'bracing_type',"title"=>'Тип крепления','content'=>$product['bracing_type']);
                $items[] = array("name"=>'compatible_camera_model',"title"=>'Совместимые камеры','content'=>$product['compatible_camera_model']);
                $items[] = array("name"=>'battery_type',"title"=>'Тип батареек','content'=>$product['battery_type']);
                $items[] = array("name"=>'battery_count',"title"=>'Количество батареек','content'=>$product['battery_count']);
                $items[] = array("name"=>'guarantee_years',"title"=>'Гарантия (лет)','content'=>$product['guarantee_years']);
                break;
            case ('MEMORY_CARDS'):
                $items[] = array("name"=>'max_read_speed_mb',"title"=>'Макс. скорость чтения (мб)','content'=>$product['max_read_speed_mb']);
                $items[] = array("name"=>'max_write_speed_mb',"title"=>'Макс. скорость записи (мб)','content'=>$product['max_write_speed_mb']);
                $items[] = array("name"=>'volume',"title"=>'Объем (гб)','content'=>$product['volume']);
                break;
            case ('LENSES'):
                $items[] = array("name"=>'focal_length_mm',"title"=>'Фокусное расстояние (мм)','content'=>$product['focal_length_mm']);
                $items[] = array("name"=>'guarantee_years',"title"=>'Гарантия (лет)','content'=>$product['guarantee_years']);
                break;
            default:
                break;
        }
        $items[] = array("name"=>'price',"title"=>'Цена','content'=>$product['price']);
        $items[] = array("name"=>'image',"title"=>'Изображение','content'=>$product['image']);

        $footer = render('forms/button', array('ref'=>"deleteGood.php?id=$id&table=$table", 'title'=>'Удалить'));

        echo render('edit', array('cap'=>$footer, 'footer'=>'', 'menu'=>$menu, 'action'=>
            "updateGood.php?table=$table&id=$id&login=$login",
            'items'=>$items));

        return;
    }
}
echo render('adminPanel', array('menu'=>'', '_SESSION'=>''));