<?php

require_once "connect.php";
include 'functions.php';

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

$cap = render('cap');
$footer = render('footer');

$menuItems = getMenuItems('mainPage');
$menu = render('menu', array('items'=>$menuItems));

echo render('index', array('cap'=>$cap, 'contentImage'=>$contentImage, 'contentImage2'=>$contentImage2,
    'quote'=>$quote, 'quoteAuthor'=>$quoteAuthor,
    'footer'=>$footer, 'menu'=>$menu));
