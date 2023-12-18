<?php
function getCommonMenuItems($pageName) : array
{
    $arr = array(
        'MAIN_PAGE' => array('class' => '', 'content' => 'index.php', 'name' => 'Главная страница'),
        'AUTHOR' => array('class' => '', 'content' => 'author.php', 'name' => 'Об авторе'),
        'COMPANY' => array('class' => '', 'content' => 'displayCompany.php', 'name' => 'О фирме'),

        'LENSES' => array('class' => '', 'content' => 'displayGoods.php?goodType=LENSES',
            'name' => 'Объективы'),
        'CAMERAS' => array('class' => '', 'content' => 'displayGoods.php?goodType=CAMERAS',
            'name' => 'Фотоаппараты'),
        'FLASHES' => array('class' => '', 'content' => 'displayGoods.php?goodType=FLASHES',
            'name' => 'Вспышки'),
        'MEMORY_CARDS' => array('class' => '', 'content' => 'displayGoods.php?goodType=MEMORY_CARDS',
            'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}

function getEditMenuItems($pageName, $login) : array
{
    $arr = array(
        'MAIN_PAGE' => array('class' => '', 'content' => "displayEditingPage.php?login=$login&page=MAIN_PAGE",
            'name' => 'Главная страница'),
        'AUTHOR' => array('class' => '', 'content' => "displayEditingPage.php?login=$login&page=AUTHOR",
            'name' => 'Об авторе'),
        'COMPANY' => array('class' => '', 'content' => "displayEditingPage.php?login=$login&page=COMPANY",
            'name' => 'О фирме'),

        'LENSES' => array('class' => '', 'content' => "displayEditingGoods.php?login=$login&table=LENSES",
            'name' => 'Объективы'),
        'CAMERAS' => array('class' => '', 'content' => "displayEditingGoods.php?login=$login&table=CAMERAS",
            'name' => 'Фотоаппараты'),
        'FLASHES' => array('class' => '', 'content' => "displayEditingGoods.php?login=$login&table=FLASHES",
            'name' => 'Вспышки'),
        'MEMORY_CARDS' => array('class' => '', 'content' => "displayEditingGoods.php?login=$login&table=MEMORY_CARDS",
            'name' => 'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
}