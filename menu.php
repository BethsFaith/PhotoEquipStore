<?php

function getCommonMenuItems($pageName) : array
{
    $arr = array(
        'mainPage' => array('class' => '', 'content' => 'index.php', 'name' => 'Главная страница'),
        'author' => array('class' => '', 'content' => 'author.php', 'name' => 'Об авторе'),
        'company' => array('class' => '', 'content' => 'company.php', 'name' => 'О фирме'),
        'lenses' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Объективы'),
        'cameras' => array('class' => '', 'content' => 'cameras.php', 'name' => 'Фотоаппараты'),
        'flashes' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Вспышки'),
        'memoryCards' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}

function getEditMenuItems($pageName) : array
{
    $arr = array(
        'mainPage' => array('class' => '', 'content' => 'editIndex.php', 'name' => 'Главная страница'),
        'author' => array('class' => '', 'content' => 'editAuthor.php', 'name' => 'Об авторе'),
        'company' => array('class' => '', 'content' => 'editCompany.php', 'name' => 'О фирме'),
        'lenses' => array('class' => '', 'content' => 'editLenses.html', 'name' => 'Объективы'),
        'cameras' => array('class' => '', 'content' => 'editCameras.php', 'name' => 'Фотоаппараты'),
        'flashes' => array('class' => '', 'content' => 'editLenses.html', 'name' => 'Вспышки'),
        'memoryCards' => array('class' => '', 'content' => 'editLenses.html', 'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}