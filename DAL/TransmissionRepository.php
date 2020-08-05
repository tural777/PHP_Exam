<?php

function GetAllTransmissions()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM transmission;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function GetTransmissionById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from transmission where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertTransmission($transmissionName)
{
    global $db_handle;
    $query = "insert into transmission (name)
values ('$transmissionName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteTransmission($Id){
    global $db_handle;
    $query = "delete from transmission where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
