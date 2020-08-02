<?php
require "DbConnection.php";

function GetAllGearboxTypes()
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM gearbox_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetGearboxTypeById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from gearbox_type where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_assoc($pg_query);
    pg_close($db_handle);
    return $arr;
}

function InsertGearboxType($gearboxTypeName)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "insert into gearbox_type (name)
values ('$gearboxTypeName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function DeleteGearboxType($Id){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "delete from gearbox_type where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result;
}
