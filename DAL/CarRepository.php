<?php
require "DbConnection.php";
require "CarImgRepository.php";

function GetAllCars()
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $pg_query = pg_query($db_handle, "SELECT * FROM car;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    pg_close($db_handle);
    return $arr;
}

function GetCarById($Id)
{
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from car where Id = '$Id';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_assoc($pg_query);
    pg_close($db_handle);
    return $arr;
}

function InsertCar($user_id, $city_id, $model_id, $year, $body_type_id, $color_id, $engineCapacity, $HP, $fuel_type_id, $mileage, $gearbox_type_id, $transmission_id, $price, $description,$Images = null, $title = '', $isActive = 0)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "insert into car (User_Id,Title, IsActive,City_Id,Model_Id, Year,Body_type_Id,Color_Id, EngineCapacity, HP,Fuel_type_Id, Mileage,Gearbox_type_Id,transmission_id, Price, Description)
values ('$user_id','$title','$isActive','$city_id','$model_id','$year','$body_type_id','$color_id','$engineCapacity','$HP','$fuel_type_id','$mileage','$gearbox_type_id','$transmission_id','$price','$description') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);

    if($Images != null){
        InsertCarImg($Images,$result[0]);
    }


    pg_close($db_handle);
    return $result[0];
}

function UpdateCar($car_id, $title, $isActive, $city_id, $model_id, $year, $body_type_id, $color_id, $engineCapacity, $HP, $fuel_type_id, $mileage, $gearbox_type_id, $transmission_id, $price, $description)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "update car set (updated,Title, IsActive,City_Id,Model_Id, Year,Body_type_Id,Color_Id, EngineCapacity, HP,Fuel_type_Id, Mileage,Gearbox_type_Id,transmission_id, Price, Description) 
= ('now()','$title','$isActive','$city_id','$model_id','$year','$body_type_id','$color_id','$engineCapacity','$HP','$fuel_type_id','$mileage','$gearbox_type_id','$transmission_id','$price','$description')
where Id ='$car_id' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result[0];
}

function DeleteCar($Id)
{
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "delete from car where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    pg_close($db_handle);
    return $result;
}
