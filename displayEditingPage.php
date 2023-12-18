<?php

require_once "connect.php";
include "templateFunc.php";
include "DBFunc.php";
include "User.php";
include "menu.php";

$page = $_GET['page'];
$login = $_GET['login'];
if (isset($_COOKIE['user'])) {
    $cashLogin = $_COOKIE['user'];
    if ($cashLogin == $login) {
        $DB = getDB();
        if (!$DB->isOpen()) {
            return;
        }

        $id = getPageId($DB->getConnection(), $page);
        $arr = getPageElements($DB->getConnection(), $id);
        $items = array();

        foreach ($arr as $key=>$value) {
            $items[] = array("title"=>$value->name,"name"=>$value->name,'content'=>$value->content);
        }

        $menuItems = getEditMenuItems($page, $login);

        $menu = render('forms/menu', array('items' => $menuItems));

        echo render('edit', array('cap'=>'','menu' => $menu, 'items'=>$items,
            'action'=>"updatePage.php?page=$page&login=$login"));

        return;
    }
}
echo render('adminPanel', array('menu'=>'', '_SESSION'=>''));