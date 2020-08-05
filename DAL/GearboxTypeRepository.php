<?php

function GetAllGearboxTypes()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM gearbox_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetGearboxTypeById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from gearbox_type where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertGearboxType($gearboxTypeName)
{
    global $db_handle;
    $query = "insert into gearbox_type (name)
values ('$gearboxTypeName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateGearboxType($gearboxTypeId, $gearboxTypeName){
    global $db_handle;
    $query = "update gearbox_type set name = '$gearboxTypeName' where id = '$gearboxTypeId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteGearboxType($Id){
    global $db_handle;
    $query = "delete from gearbox_type where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
