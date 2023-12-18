<?php

require_once "connect.php";
include "templateFunc.php";
include "menu.php";
include "DBFunc.php";

$table = $_GET['table'];
$login = $_GET['login'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$properties = getProperties($DB->getConnection(), $table);
$array = array();
foreach ($properties as $name) {
    if ($name != 'id') {
        $array["$name"] =  $_POST["$name"];
    }
}

$res = insert($DB->getConnection(), $table, $array);
if ($res) {
    echo "Успешно";
} else {
    echo "Добавление завершилось с ошибкой";
}

$menuItems = getEditMenuItems('CAMERAS', $login);
$menu = render('forms/menu', array('items'=>$menuItems));

echo render('empty', array('menu'=>$menu));