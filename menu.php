<?php
function getCommonMenuItems($pageName) : array
{
    $arr = array(
        'MAIN_PAGE' => array('class' => '', 'content' => 'index.php', 'name' => 'Главная страница'),
        'AUTHOR' => array('class' => '', 'content' => 'author.php', 'name' => 'Об авторе'),
        'COMPANY' => array('class' => '', 'content' => 'company.php', 'name' => 'О фирме'),
        'LENSES' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Объективы'),
        'CAMERAS' => array('class' => '', 'content' => 'cameras.php', 'name' => 'Фотоаппараты'),
        'FLASHES' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Вспышки'),
        'MEMORY_CARDS' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}

function getEditMenuItems($pageName) : array
{
    $arr = array(
        'MAIN_PAGE' => array('class' => '', 'content' => 'editPage.php', 'name' => 'Главная страница'),
        'AUTHOR' => array('class' => '', 'content' => 'editPage.php', 'name' => 'Об авторе'),
        'COMPANY' => array('class' => '', 'content' => 'editPage.php', 'name' => 'О фирме'),
        'LENSES' => array('class' => '', 'content' => 'editLenses.html', 'name' => 'Объективы'),
        'CAMERAS' => array('class' => '', 'content' => 'editCameras.php', 'name' => 'Фотоаппараты'),
        'FLASHES' => array('class' => '', 'content' => 'editLenses.html', 'name' => 'Вспышки'),
        'MEMORY_CARDS' => array('class' => '', 'content' => 'editLenses.html', 'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}