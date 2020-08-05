<?php

function GetAllColors()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM color;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetColorById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from color where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertColor($colorName)
{
    global $db_handle;
    $query = "insert into color (name)
values ('$colorName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateColor($colorId, $colorName){
    global $db_handle;
    $query = "update color set name = '$colorName' where id = '$colorId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteColor($Id){
    global $db_handle;
    $query = "delete from color where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
