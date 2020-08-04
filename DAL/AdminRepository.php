<?php

$CONN_STRING ="host='134.122.72.17' port='5432' dbname='phpstepproject' user='phpstepproject' password='phpstepproject'";
$db_handle = pg_connect($CONN_STRING);


function GetAllCars()
{
    global $db_handle;
    
    $pg_query = pg_query($db_handle, "
select distinct Car.Id,Title,IsActive,added,updated, City.Name as Cities,Brand.Name as Brand,model.Name as Model,
Year,Body_type.Name as BodyType,Color.Name as Color,EngineCapacity,HP,Fuel_type.Name as FuelType,Mileage,
Gearbox_type.Name as GearboxType,Transmission.Name as Transmission,Price,Description, Car_Img.Img_Path from car
    left join \"user\" u on Car.User_Id = u.Id
    left join  city on Car.City_Id = city.Id
    left join  model on Car.Model_Id = model.Id
    left join  brand on Model.Brand_id = Brand.Id
    left join  body_type  on Car.Body_type_Id = Body_type.id
    left join  color  on Car.Color_Id = color.Id
    left join  fuel_type  on Car.Fuel_type_Id =Fuel_type.Id
    left join  gearbox_type  on Car.Gearbox_type_Id = Gearbox_type.Id
    left join  transmission  on Car.Transmission_Id = transmission.Id
    left join Car_Img on Car.Id = Car_Img.Car_Id
    order by added desc;
");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


function GetAllColors()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM color;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}



function GetAllCities()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM city;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


function GetAllFuelTypes()
{
    global $db_handle;
    
    $pg_query = pg_query($db_handle, "SELECT * FROM fuel_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


function GetAllGearboxTypes()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM gearbox_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


function GetAllTransmissions()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM transmission;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


function GetAllBodyTypes()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM body_type;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


function GetAllModels()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM model;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


function GetAllBrands()
{
    global $db_handle;
   
    $pg_query = pg_query($db_handle, "SELECT * FROM brand;");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    //pg_close($db_handle);
    return $arr;
}


?>