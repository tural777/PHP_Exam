<?php

function GetAllFuelTypes()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM fuel_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetFuelTypeById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from fuel_type where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertFuelType($fuelTypeName)
{
    global $db_handle;
    $query = "insert into fuel_type (name)
values ('$fuelTypeName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateFuelType($fuelTypeId, $fuelTypeName){
    global $db_handle;
    $query = "update fuel_type set name = '$fuelTypeName' where id = '$fuelTypeId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteFuelType($Id){
    global $db_handle;
    $query = "delete from fuel_type where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
