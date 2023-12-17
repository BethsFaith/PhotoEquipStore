<?php

require_once "connect.php";
include "menu.php";
include 'functions.php';

$id = $_GET['id'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

/*$cap = render('cap');
$footer = render('footer');*/

$menuItems = getEditMenuItems('cameras');
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

echo render('edit', array('cap'=>'', 'footer'=>'', 'menu'=>$menu, 'action'=>"editGood.php?table=CAMERAS&id=$id",
    'items'=>$items));
?>