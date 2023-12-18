<?php

require_once "connect.php";
include "menu.php";
include "templateFunc.php";

$id = $_GET['id'];
$table = $_GET['table'];

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

$sql = "delete from $table where id = $id";
try {
    $result = $DB->getConnection()->exec($sql);
    if ($result > 0) {
        echo 'Успешно';
    }
}
catch (PDOException $ex) {
    echo 'Ошибка во время удаления:' . $ex->getMessage();
}

$menuItems = getEditMenuItems('CAMERAS');
$menu = render('forms/menu', array('items'=>$menuItems));

echo $menu;