<?php

include 'PageElementEntity.php';
include 'MenuItem.php';

function getPageId($conn, $pageName)
{
    $sql = "select * from PAGES where name = '$pageName'";
    $result = $conn->query($sql);
    $row = $result->fetch();
    return $row["id"];
}

function getPageElements($conn, $pageId): array
{
    $sql = "select * from PAGE_ELEMENTS where page_id = $pageId";
    $result = $conn->query($sql);

    $arr = array();
    while($row = $result->fetch()){
        $element = new PageElementEntity();
        $element->id = $row["id"];
        $element->page_id = $row["page_id"];
        $element->name = $row["name"];
        $element->type = $row["type"];
        $element->content = $row["content"];

        $arr[$element->name] = $element;
    }

    return $arr;
}

function getMenuItems($pageName) : array
{
    $arr = array(
        'mainPage'=> new MenuItem('<li>', '</a></li>', '<a href="index.php">','Главная страница'),
        'author'=>new MenuItem('<li>', '</a></li>','<a href="author.php">','Об авторе'),
        'company'=>new MenuItem('<li>', '</a></li>','<a href="company.php">','О фирме'),
        'lenses'=>new MenuItem('<li>', '</a></li>','<a href="lenses.html">','Объективы'),
        'cameras'=>new MenuItem('<li>', '</a></li>','<a href="templates/photo.html">','Фотоаппараты'),
        'flashes'=>new MenuItem('<li>', '</a></li>','<a href="lenses.html">','Вспышки'),
        'memoryCards'=>new MenuItem('<li>', '</a></li>','<a href="lenses.html">','Карты памяти'),
    );

    $arr[$pageName]->setBegin('<li class="active">');
    $arr[$pageName]->setContent('');

    return $arr;
}

function extractMenuItems(array $menuItems): array
{
    $menuExtractedItems = array();
    foreach ($menuItems as $page => $elem ) {
        $menuExtractedItems[$page] = $elem->extract();
    }

    return $menuExtractedItems;
}

function render($tmp,$vars = array()) {
    if(file_exists('templates/'.$tmp.'.tpl.php')) {
        ob_start();
        extract($vars);
        require 'templates/' . $tmp . '.tpl.php';
        return ob_get_clean();
    }
}

?>