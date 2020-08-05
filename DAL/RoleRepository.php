<?php
require "DbConnection.php";

function GetAllRoles()
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM role;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetRoleById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from role where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    pg_close($db_handle);
    return $arr;
}

function GetRoleByName($name){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from role where name = '$name';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    pg_close($db_handle);
    return $arr;
}

function InsertRole($roleName)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "insert into role (name)
values ('$roleName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function UpdateRole($roleId, $roleName){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "update role set name = '$roleName' where id = '$roleId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function DeleteRole($Id){
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "delete from role where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result;
}
