<?php


require_once "connect.php";
include 'functions.php';

$DB = getDB();

$id = getPageId($DB->getConnection(), 'COMPANY');
$arr = getPageElements($DB->getConnection(), $id);

$companyImage1 = $arr['companyImage1']->content;
$companyImage2 = $arr['companyImage2']->content;
$address = $arr['address']->content;
$phoneNumber = $arr['phoneNumber']->content;
$locationImage = $arr['locationImage']->content;

$cap = render('cap');
$footer = render('footer');

$menuItems = getMenuItems('company');
$menu = render('menu', array('items'=>$menuItems));

echo render('company', array('cap'=>$cap, 'footer'=>$footer, 'companyImage1' => $companyImage1,
    'companyImage2' => $companyImage2, 'address'=>$address, 'phoneNumber'=>$phoneNumber,
    'locationImage'=>$locationImage, 'menu'=>$menu));