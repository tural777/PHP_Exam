<?php
require "DbConnection.php";

function GetAllUsers()
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM \"user\";");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetUserById($Id)
{
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from \"user\" where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    pg_close($db_handle);
    return $arr;
}

function InsertUser($name,$surname, $email, $password, $role_id)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "insert into \"user\" (email, password,role_id,name,surname) values ('$email','$password','$role_id','$name','$surname') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function UpdateUser($userId, $name,$surname, $email, $password, $role_id)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "update \"user\" set (name,surname,email,password,role_id) = ('$name','$surname','$email','$password','$role_id') where id = '$userId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function DeleteUser($Id)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "delete from \"user\" where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result;
}

function GetUserInfoByEmailAndPassword($email, $password)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select Email,\"user\".name,\"user\".surname,\"user\".Email,Role.Name as Role from \"user\"
              left join Role on Role_Id = Role.Id
              where Email = '$email' and Password = '$password'";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    pg_close($db_handle);
    return $arr == null ? null:$arr[0];
}
