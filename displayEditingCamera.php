<?php

require_once "connect.php";
include "menu.php";
include 'templateFunc.php';
include 'DBFunc.php';

$id = $_GET['id'];
$login = $_GET['login'];

if (isset($_COOKIE['user'])) {
    $cashLogin = $_COOKIE['user'];
    echo $cashLogin;
    if ($cashLogin == $login) {
        $DB = getDB();
        if (!$DB->isOpen()) {
            return;
        }

        $menuItems = getEditMenuItems('CAMERAS', $login);
        $menu = render('forms/menu', array('items'=>$menuItems));

        $product = getGoodById($DB->getConnection(), 'CAMERAS', $id);
        $items = array();

        $items[] = array("name"=>'name','content'=>$product['name']);
        $items[] = array("name"=>'product_code','content'=>$product['product_code']);
        $items[] = array("name"=>'quantity','content'=>$product['quantity']);
        $items[] = array("name"=>'guarantee_years','content'=>$product['guarantee_years']);
        $items[] = array("name"=>'matrix_type','content'=>$product['matrix_type']);
        $items[] = array("name"=>'recording_format','content'=>$product['recording_format']);
        $items[] = array("name"=>'total_mp_quantity','content'=>$product['total_mp_quantity']);
        $items[] = array("name"=>'price','content'=>$product['price']);
        $items[] = array("name"=>'image','content'=>$product['image']);

        $footer = render('forms/button', array('ref'=>"deleteGood.php?id=$id&table=CAMERAS", 'title'=>'Удалить'));

        echo render('edit', array('cap'=>$footer, 'footer'=>'', 'menu'=>$menu, 'action'=>"updateGood.php?table=CAMERAS
        &id=$id&login=$login",
            'items'=>$items));

        return;
    }
}
echo render('adminPanel', array('menu'=>'', '_SESSION'=>''));