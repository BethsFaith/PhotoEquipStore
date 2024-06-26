<?php

require_once "connect.php";
include 'templateFunc.php';
include "DBFunc.php";
include "menu.php";

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$id = getPageId($DB->getConnection(), 'MAIN_PAGE');
$arr = getPageElements($DB->getConnection(), $id);

$contentImage = $arr['contentImage1']->content;
$contentImage2 = $arr['contentImage2']->content;
$quote = $arr['quote1']->content;
$quoteAuthor = $arr['quoteAuthor1']->content;
$about = $arr['about']->content;

$cap = render('forms/cap');
$footer = render('forms/footer');

$menuItems = getCommonMenuItems('MAIN_PAGE');
$menu = render('forms/menu', array('items'=>$menuItems));

echo render('index', array('cap'=>$cap, 'contentImage'=>$contentImage, 'contentImage2'=>$contentImage2,
    'quote'=>$quote, 'quoteAuthor'=>$quoteAuthor,
    'footer'=>$footer, 'menu'=>$menu, 'about'=>$about));
