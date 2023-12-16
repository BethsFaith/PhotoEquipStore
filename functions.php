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

function getProducts($conn, $table): array
{
    $sql = "select * from $table";
    $result = $conn->query($sql);

    $arr = array();
    while($row = $result->fetch()){
        $arr[] = $row;
    }

    return $arr;
}

function getProductById($conn, $table, $id): array
{
    $sql = "select * from $table where id = $id";
    $result = $conn->query($sql);

    return $result->fetch();
}

function getMenuItems($pageName) : array
{
    $arr = array(
        'mainPage'=> array('class'=>'', 'content'=>'index.php','name'=>'Главная страница'),
        'author'=>array('class'=>'', 'content'=>'author.php','name'=>'Об авторе'),
        'company'=>array('class'=>'', 'content'=>'company.php','name'=>'О фирме'),
        'lenses'=>array('class'=>'', 'content'=>'lenses.html','name'=>'Объективы'),
        'cameras'=>array('class'=>'', 'content'=>'cameras.php','name'=>'Фотоаппараты'),
        'flashes'=>array('class'=>'', 'content'=>'lenses.html','name'=>'Вспышки'),
        'memoryCards'=>array('class'=>'', 'content'=>'lenses.html','name'=>'Карты памяти'),
    );

    $arr[$pageName]['class'] = '"active"';

    return $arr;
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