<?php

function GetAllModels()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM model;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetModelsByBrandId($brandId){
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM model WHERE brand_id = '$brandId';");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetModelById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from model where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertModel($modelName,$brandId)
{
    global $db_handle;
    $query = "insert into model (name,brand_id)
values ('$modelName','$brandId') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateModel($modelId, $modelName){
    global $db_handle;
    $query = "update model set name = '$modelName' where id = '$modelId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteModel($Id){
    global $db_handle;
    $query = "delete from model where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
