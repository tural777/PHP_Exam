<?php

function GetAllBrands()
{
    global $db_handle;
    $pg_query = pg_query($db_handle, "SELECT * FROM brand;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetBrandById($Id){
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle;
    $query = "select * from brand where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertBrand($brandName)
{
    global $db_handle;
    $query = "insert into brand (name)
values ('$brandName') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function UpdateBrand($brandId, $brandName){
    global $db_handle;
    $query = "update brand set name = '$brandName' where id = '$brandId' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteBrand($Id){
    global $db_handle;
    $query = "delete from brand where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
