<?php

include 'DBConnection.php';

function getDB(): DBConnection
{
    return new DBConnection("mysql:host=localhost;port=3306;dbname=PhotoEquipStore",
        "root", "1611");
}