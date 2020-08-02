<?php
require "DbConnection.php";

function GetAllTransmissions()
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM transmission;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetTransmissionById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from transmission where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_assoc($pg_query);
    pg_close($db_handle);
    return $arr;
}

function InsertTransmission($transmissionName)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "insert into transmission (name)
values ('$transmissionName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function DeleteTransmission($Id){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "delete from transmission where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result;
}