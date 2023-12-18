<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "User.php";
include "menu.php";

$name = $_POST["name"];
$content = $_POST["content"];
$page = $_GET['page'];

$login = $_GET['login'];
if (isset($_COOKIE['user'])) {
    $cashLogin = $_COOKIE['user'];
    if ($cashLogin == $login) {
        $DB = getDB();
        if (!$DB->isOpen()) {
            return;
        }
        $page_id = getPageId($DB->getConnection(), $page);
        $res = updatePageElement($DB->getConnection(), $page_id, $name, $content);
        echo $res ? "Изменения сохранены" : "Произошла ошибка во время сохранения" ;

        $menuItems = getEditMenuItems($page, $login);
        $menu = render('forms/menu', array('items' => $menuItems));
        echo render('empty', array('menu'=>$menu));
        return;
    }
}
echo render('adminPanel', array('menu'=>'', '_SESSION'=>''));