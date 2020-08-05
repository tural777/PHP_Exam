<?php

function GetAllRoles()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM role;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetRoleById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from role where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function GetRoleByName($name){
    global $db_handle;
    $query = "select * from role where name = '$name';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertRole($roleName)
{
    global $db_handle;
    $query = "insert into role (name)
values ('$roleName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateRole($roleId, $roleName){
    global $db_handle;
    $query = "update role set name = '$roleName' where id = '$roleId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteRole($Id){
    global $db_handle;
    $query = "delete from role where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
