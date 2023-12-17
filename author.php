<?php

require_once "connect.php";
include 'functions.php';
include "menu.php";

$DB = getDB();

$id = getPageId($DB->getConnection(), 'AUTHOR');
$arr = getPageElements($DB->getConnection(), $id);

$authorName = $arr['authorName']->content;
$authorWork = $arr['authorWork']->content;
$authorImage = $arr['authorImage']->content;

$cap = render('cap');
$footer = render('footer');

$menuItems = getCommonMenuItems('author');
$menu = render('menu', array('items'=>$menuItems));

echo render('author', array('cap'=>$cap, 'footer'=>$footer, 'authorName'=>$authorName, 'authorWork'=>$authorWork,
    'authorImage'=>$authorImage, 'menu'=>$menu));