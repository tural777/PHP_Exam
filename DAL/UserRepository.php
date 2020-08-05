<?php

function GetAllUsers()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM \"user\";");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetUserById($Id)
{
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from \"user\" where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertUser($name,$surname, $email, $password, $role_id)
{
    global $db_handle;
    $query = "insert into \"user\" (email, password,role_id,name,surname) values ('$email','$password','$role_id','$name','$surname') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateUser($userId, $name,$surname, $email, $password, $role_id)
{
    global $db_handle;
    $query = "update \"user\" set (name,surname,email,password,role_id) = ('$name','$surname','$email','$password','$role_id') where id = '$userId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteUser($Id)
{
    global $db_handle;
    $query = "delete from \"user\" where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}

function GetUserInfoByEmailAndPassword($email, $password)
{
    global $db_handle;
    $query = "select Email,\"user\".name,\"user\".surname,\"user\".Email,Role.Name as Role from \"user\"
              left join Role on Role_Id = Role.Id
              where Email = '$email' and Password = '$password'";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr == null ? null:$arr[0];
}
