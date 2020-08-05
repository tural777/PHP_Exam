<?php

function GetAllBodyTypes()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM body_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    
    return $arr;
}

function GetBodyTypeById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from body_type where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    
    return $arr;
}

function InsertBodyType($bodyTypeName)
{
    global $db_handle;
    $query = "insert into body_type (name)
values ('$bodyTypeName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    
    return $result[0];
}

function UpdateBodyType($bodyTypeId, $bodyTypeName){
    global $db_handle;
    $query = "update body_type set name = '$bodyTypeName' where id = '$bodyTypeId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    
    return $result[0];
}

function DeleteBodyType($Id){
    global $db_handle;
    $query = "delete from body_type where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    
    return $result;
}
