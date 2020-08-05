<?php

function GetAllCities()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM city;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetCityById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from city where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertCity($cityName)
{
    global $db_handle;
    $query = "insert into city (name)
values ('$cityName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateCity($cityId, $cityName){
    global $db_handle;
    $query = "update city set name = '$cityName' where id = '$cityId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteCity($Id){
    global $db_handle;
    $query = "delete from city where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
