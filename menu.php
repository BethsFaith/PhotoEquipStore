<?php
function getCommonMenuItems($pageName) : array
{
    $arr = array(
        'MAIN_PAGE' => array('class' => '', 'content' => 'index.php', 'name' => 'Главная страница'),
        'AUTHOR' => array('class' => '', 'content' => 'author.php', 'name' => 'Об авторе'),
        'COMPANY' => array('class' => '', 'content' => 'displayCompany.php', 'name' => 'О фирме'),
        'LENSES' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Объективы'),
        'CAMERAS' => array('class' => '', 'content' => 'cameras.php', 'name' => 'Фотоаппараты'),
        'FLASHES' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Вспышки'),
        'MEMORY_CARDS' => array('class' => '', 'content' => 'lenses.html', 'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}

function getEditMenuItems($pageName, $login) : array
{
    $arr = array(
        'MAIN_PAGE' => array('class' => '', 'content' => "displayEditingPage.php?login=$login&page=MAIN_PAGE",
            'name' => 'Главная страница'),
        'AUTHOR' => array('class' => '', 'content' => "displayEditingPage.php?login=$login&page=AUTHOR", 'name' => 'Об авторе'),
        'COMPANY' => array('class' => '', 'content' => "displayEditingPage.php?login=$login&page=COMPANY", 'name' => 'О фирме'),
        'LENSES' => array('class' => '', 'content' => "editLenses.html", 'name' => 'Объективы'),
        'CAMERAS' => array('class' => '', 'content' => "displayEditingCameras.php?login=$login", 'name' => 'Фотоаппараты'),
        'FLASHES' => array('class' => '', 'content' => "editLenses.html?login=$login", 'name' => 'Вспышки'),
        'MEMORY_CARDS' => array('class' => '', 'content' => "editLenses.html?login=$login", 'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}