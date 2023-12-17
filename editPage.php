<?php

include "connect.php";
include "functions.php";
include "User.php";
include "menu.php";

$name = $_POST["name"];
$content = $_POST["content"];
$page = $_GET['page'];

echo $name;
echo $content;
echo $page;

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$page_id = getPageId($DB->getConnection(), $page);
$res = updatePageElement($DB->getConnection(), $page_id, $name, $content);
echo $res ? "Изменения сохранены" : "Произошла ошибка во время сохранения" ;

/*$user = new User();
if ($user->logIn(getDB()->getConnection(), $login, $password)) {

    $_SESSION['user']=["name"=>$user->getLogin()];

    $menuItems = getEditMenuItems('mainPage');

    $menu = render('menu', array('items'  => $menuItems));

    echo render('adminPanel', array('menu'=>$menu, '_SESSION'=>$_SESSION));
}*/
?>