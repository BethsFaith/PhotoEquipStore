<?php

include 'PageElementEntity.php';

function render($tmp,$vars = array()) {
    if(file_exists('templates/'.$tmp.'.tpl.php')) {
        ob_start();
        extract($vars);
        require 'templates/' . $tmp . '.tpl.php';
        return ob_get_clean();
    }
}

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

function updatePageElement($conn, $pageId, $name, $content)
{
    $sql = "update PAGE_ELEMENTS set content = '$content' where name = '$name' and page_id = $pageId";
    try {
        echo $sql;
        $result = $conn->query($sql);

        return true;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function updateGoodProperty($conn, $id, $propertyName, $propertyValue, $table)
{
    $sql = "update $table set $propertyName = '$propertyValue' where id = $id";
    try {
        echo $sql;
        $result = $conn->query($sql);

        return true;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function getGoods($conn, $table): array
{
    $sql = "select * from $table";
    $result = $conn->query($sql);

    $arr = array();
    while($row = $result->fetch()){
        $arr[] = $row;
    }

    return $arr;
}

function getGoodById($conn, $table, $id): array
{
    $sql = "select * from $table where id = $id";
    $result = $conn->query($sql);

    return $result->fetch();
}

?>