<?php

require_once "connect.php";
include "templateFunc.php";
include "User.php";
include "menu.php";

$login = $_POST["login"];
$password = $_POST["password"];

$user = new User();
if ($user->logIn(getDB()->getConnection(), $login, $password)) {

    $_SESSION['user']=["name"=>$user->getLogin()];

    setcookie('user', $user->getLogin(), time()+60*60*24);

    $menuItems = getEditMenuItems('MAIN_PAGE', "$login");
    $menu = render('forms/menu', array('items'  => $menuItems));

    echo render('adminPanel', array('menu'=>$menu, '_SESSION'=>$_SESSION));
}
?>