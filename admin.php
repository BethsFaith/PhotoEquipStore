<?php

require_once "connect.php";
include 'templateFunc.php';

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

echo render('admin');

