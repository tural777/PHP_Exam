<?php
require "DbConnection.php";

function GetAllFuelTypes()
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM fuel_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetFuelTypeById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from fuel_type where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_assoc($pg_query);
    pg_close($db_handle);
    return $arr;
}

function InsertFuelType($fuelTypeName)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "insert into fuel_type (name)
values ('$fuelTypeName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function UpdateFuelType($fuelTypeId, $fuelTypeName){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "update fuel_type set name = '$fuelTypeName' where id = '$fuelTypeId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function DeleteFuelType($Id){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "delete from fuel_type where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result;
}
