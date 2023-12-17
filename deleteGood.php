<?php

include "connect.php";

$id = $_GET['id'];
$table = $_GET['table'];

echo $id;
echo $table;

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
