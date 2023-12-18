<?php

require_once "connect.php";
include "menu.php";
include 'templateFunc.php';
include "DBFunc.php";

$table = $_GET['table'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$cap = render('forms/cap');
$footer = render('forms/footer');

$menuItems = getCommonMenuItems($table);
$menu = render('forms/menu', array('items'=>$menuItems));

$product = getGoodById($DB->getConnection(), $table, $_GET['id']);
/*$image = $product['image'];

$properties = array();
foreach ($product as $key=>$value) {
    if ($key != 'image' && $key != 'id') {
        $properties[$key] = $value;
    }
}*/

$properties = array();
$properties['Модель'] =  $product['name'];
$properties['Код товара'] = $product['product_code'];
$properties['В наличии'] = $product['quantity'];

$image = $product['image'];
switch ($table) {
    case ('CAMERAS') :
        $properties['Тип матрицы']= $product['matrix_type'];
        $properties['Формат записи'] = $product['recording_format'];
        $properties['Количество мегапикселей (общее)'] = $product['total_mp_quantity'];
        $properties['Гарантия (лет)'] = $product['guarantee_years'];

        break;
    case ('FLASHES') :
        $template = 'flash';

        $properties['Тип батареек']= $product['battery_type'];
        $properties['Количество батареек'] = $product['battery_count'];
        $properties['Тип крепления'] = $product['type_bracing'];
        $properties['Совместимые камеры'] = $product['compatible_camera_model'];
        $properties['Гарантия (лет)'] = $product['guarantee_years'];

        break;
    case ('LENSES') :
        $template = 'lenses';

        $properties['Фокусное расстояние (мм)'] = $product['focal_length_mm'];
        $properties['Гарантия (лет)'] = $product['guarantee_years'];

        break;
    case ('MEMORY_CARDS') :
        $template = 'memory_card';

        $properties['Макс. скорость чтения (мб)']= $product['max_read_speed_mb'];
        $properties['Макс. скорость записи (мб)'] = $product['max_write_speed_mb'];
        $properties['Объем (гб)'] = $product['volume'];

        break;
    default:
        return;
}
$properties['Цена (р)'] = $product['price'];

$view = render('forms/goodView',
array('image'=>$image, 'properties' => $properties));

echo render('good', array('cap'=>$cap, 'footer'=>$footer, 'menu'=>$menu, 'view'=>$view));