<?php
require "DbConnection.php";

function GetAllModels()
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM model;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetModelsByBrandId($brandId){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM model WHERE brand_id = '$brandId';");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetModelById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from model where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_assoc($pg_query);
    pg_close($db_handle);
    return $arr;
}

function InsertModel($modelName,$brandId)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "insert into model (name,brand_id)
values ('$modelName','$brandId') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function UpdateModel($modelId, $modelName){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "update model set name = '$modelName' where id = '$modelId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function DeleteModel($Id){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "delete from model where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result;
}
