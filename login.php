<?php

include "connect.php";
include "functions.php";
include "User.php";
include "menu.php";

$login = $_POST["login"];
$password = $_POST["password"];

$user = new User();
if ($user->logIn(getDB()->getConnection(), $login, $password)) {

    $_SESSION['user']=["name"=>$user->getLogin()];

    $menuItems = getCommonMenuItems('mainPage');

    $menuItems['mainPage']['content'] = "";
    $menuItems['author']['content'] = "";
    $menuItems['company']['content'] = "";
    $menuItems['flashes']['content'] = "";
    $menuItems['cameras']['content'] = "";
    $menuItems['lenses']['content'] = "";
    $menuItems['memoryCards']['content'] = "";

    $menu = render('menu', array('items'  => $menuItems));

    echo render('adminPanel', array('menu'=>$menu, '_SESSION'=>$_SESSION));
}
?>