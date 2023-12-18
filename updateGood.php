<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "User.php";
include "menu.php";

$name = $_POST["name"];
$content = $_POST["content"];
$table = $_GET['table'];
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

        $res = updateGoodProperty($DB->getConnection(), $id, $name, $content, $table);
        echo $res ? "Изменения сохранены" : "Произошла ошибка во время сохранения";

        $menuItems = getEditMenuItems('CAMERAS', $login);
        $menu = render('forms/menu', array('items' => $menuItems));

        echo render('empty', array('menu' => $menu));

        return;
    }
}
echo render('adminPanel', array('menu'=>'', '_SESSION'=>''));