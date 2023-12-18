<?php

include 'PageElementEntity.php';

function getProperties($conn, $table): array
{
    $sql = "SHOW COLUMNS FROM $table";
    $result = $conn->query($sql);
    $array = array();
    while($row = $result->fetch()){
        $array[] = $row['Field'];
    }
    return $array;
}

function insert($conn, $table, $properties) : bool
{
    $values = null;
    $names = null;
    $sql = "INSERT INTO $table (";
    foreach ($properties as $key => $value) {
        $names .= $key . ', ';
        $values .= '\'' . $value  . '\', ';
    }
    $values = substr($values, 0, strlen($values)-2);
    $names = substr($names, 0, strlen($names)-2);

    $sql .= "$names) VALUES ($values) ";

    try {
        $result = $conn->exec($sql);
        if ($result == 0) {
            return false;
        } else {
            return true;
        }
    }
    catch (PDOException $ex) {
        echo $ex->getMessage();
        return false;
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

function updatePageElement($conn, $pageId, $name, $content): bool
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

function updateGoodProperty($conn, $id, $propertyName, $propertyValue, $table): bool
{
    $sql = "update $table set $propertyName = '$propertyValue' where id = $id";
    try {
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
