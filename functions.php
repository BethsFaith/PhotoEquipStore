<?php

include 'PageElementEntity.php';

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

function render($tmp,$vars = array()) {
    if(file_exists('templates/'.$tmp.'.tpl.php')) {
        ob_start();
        extract($vars);
        require 'templates/' . $tmp . '.tpl.php';
        return ob_get_clean();
    }
}

?>