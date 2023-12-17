<?php

require_once "connect.php";
include 'functions.php';

$DB = getDB();
if (!$DB->isOpen()) {
    return;
}

echo render('admin');

