<?php


function GetAllCars()
{
    global $db_handle ;
    $pg_query = pg_query($db_handle, "
SELECT distinct Car.Id,Title,IsActive,added,updated, City.Name as City,Brand.Name as Brand,model.Name as Model,Year,Body_type.Name as BodyType,Color.Name as Color,EngineCapacity,HP,Fuel_type.Name as FuelType,Mileage,Gearbox_type.Name as Gearbox,Transmission.Name as Transmission,Price,Description, Img_Path
from car

    left join \"user\" u on Car.User_Id = u.Id
    left join  city on Car.City_Id = city.Id
    left join  model on Car.Model_Id = model.Id
    left join  brand on Model.Brand_id = Brand.Id
    left join  body_type  on Car.Body_type_Id = Body_type.id
    left join  color  on Car.Color_Id = color.Id
    left join  fuel_type  on Car.Fuel_type_Id =Fuel_type.Id
    left join  gearbox_type  on Car.Gearbox_type_Id = Gearbox_type.Id
    left join  transmission  on Car.Transmission_Id = transmission.Id

LEFT JOIN LATERAL (
     SELECT *
     FROM Car_Img
     WHERE Car_Id = Car.Id
     LIMIT 1
) I
ON true
    order by added desc;
");

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetAllCarsWithFilter($filter)
{
    global $db_handle ;
    $query = "
SELECT distinct Car.Id,Title,IsActive,added,updated, City.Name as City,Brand.Name as Brand,model.Name as Model,Year,Body_type.Name as BodyType,Color.Name as Color,EngineCapacity,HP,Fuel_type.Name as FuelType,Mileage,Gearbox_type.Name as Gearbox,Transmission.Name as Transmission,Price,Description, Img_Path
from car

    left join \"user\" u on Car.User_Id = u.Id
    left join  city on Car.City_Id = city.Id
    left join  model on Car.Model_Id = model.Id
    left join  brand on Model.Brand_id = Brand.Id
    left join  body_type  on Car.Body_type_Id = Body_type.id
    left join  color  on Car.Color_Id = color.Id
    left join  fuel_type  on Car.Fuel_type_Id =Fuel_type.Id
    left join  gearbox_type  on Car.Gearbox_type_Id = Gearbox_type.Id
    left join  transmission  on Car.Transmission_Id = transmission.Id

LEFT JOIN LATERAL (
     SELECT *
     FROM Car_Img
     WHERE Car_Id = Car.Id
     LIMIT 1
) I
ON true
    $filter
    order by added desc;
";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetAllCarsWithFilterAndLimit($filter,$limit,$offset)
{
    global $db_handle ;
    $query = "
SELECT distinct Car.Id,Title,IsActive,added,updated, City.Name as City,Brand.Name as Brand,model.Name as Model,Year,Body_type.Name as BodyType,Color.Name as Color,EngineCapacity,HP,Fuel_type.Name as FuelType,Mileage,Gearbox_type.Name as Gearbox,Transmission.Name as Transmission,Price,Description, Img_Path
from car

    left join \"user\" u on Car.User_Id = u.Id
    left join  city on Car.City_Id = city.Id
    left join  model on Car.Model_Id = model.Id
    left join  brand on Model.Brand_id = Brand.Id
    left join  body_type  on Car.Body_type_Id = Body_type.id
    left join  color  on Car.Color_Id = color.Id
    left join  fuel_type  on Car.Fuel_type_Id =Fuel_type.Id
    left join  gearbox_type  on Car.Gearbox_type_Id = Gearbox_type.Id
    left join  transmission  on Car.Transmission_Id = transmission.Id

LEFT JOIN LATERAL (
     SELECT *
     FROM Car_Img
     WHERE Car_Id = Car.Id
     LIMIT 1
) I
ON true
    $filter
    order by added desc
    LIMIT $limit  OFFSET $offset;
";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);

    return $arr;
}

function GetCarById($Id)
{
    if (!$Id) {
        throw new Exception("Id Must provided");
    }
    global $db_handle ;
    $query = "
    SELECT distinct Car.Id,Title,IsActive,added,updated, City.Name as City,Brand.Name as Brand,model.Name as Model,Year,Body_type.Name as BodyType,Color.Name as Color,EngineCapacity,HP,Fuel_type.Name as FuelType,Mileage,Gearbox_type.Name as Gearbox,Transmission.Name as Transmission,Price,Description, Img_Path
from car

    left join \"user\" u on Car.User_Id = u.Id
    left join  city on Car.City_Id = city.Id
    left join  model on Car.Model_Id = model.Id
    left join  brand on Model.Brand_id = Brand.Id
    left join  body_type  on Car.Body_type_Id = Body_type.id
    left join  color  on Car.Color_Id = color.Id
    left join  fuel_type  on Car.Fuel_type_Id =Fuel_type.Id
    left join  gearbox_type  on Car.Gearbox_type_Id = Gearbox_type.Id
    left join  transmission  on Car.Transmission_Id = transmission.Id

LEFT JOIN LATERAL (
     SELECT *
     FROM Car_Img
     WHERE Car_Id = Car.Id
     LIMIT 1
) I
ON true
    where Car.Id = '$Id';
    ";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    return $arr;
}

function InsertCar($user_id, $city_id, $model_id, $year, $body_type_id, $color_id, $engineCapacity, $HP, $fuel_type_id, $mileage, $gearbox_type_id, $transmission_id, $price, $description, $Images = null, $title = '', $isActive = 0)
{
    global $db_handle;
    $query = "insert into car (User_Id,Title, IsActive,City_Id,Model_Id, Year,Body_type_Id,Color_Id, EngineCapacity, HP,Fuel_type_Id, Mileage,Gearbox_type_Id,transmission_id, Price, Description)
values ('$user_id','$title','$isActive','$city_id','$model_id','$year','$body_type_id','$color_id','$engineCapacity','$HP','$fuel_type_id','$mileage','$gearbox_type_id','$transmission_id','$price','$description') RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);

    if ($Images != null) {
        InsertCarImg($Images, $result[0]);
    }


    return $result[0];
}

function UpdateCar($car_id, $title, $isActive, $city_id, $model_id, $year, $body_type_id, $color_id, $engineCapacity, $HP, $fuel_type_id, $mileage, $gearbox_type_id, $transmission_id, $price, $description)
{
    global $db_handle;
    $query = "update car set (updated,Title, IsActive,City_Id,Model_Id, Year,Body_type_Id,Color_Id, EngineCapacity, HP,Fuel_type_Id, Mileage,Gearbox_type_Id,transmission_id, Price, Description) 
= ('now()','$title','$isActive','$city_id','$model_id','$year','$body_type_id','$color_id','$engineCapacity','$HP','$fuel_type_id','$mileage','$gearbox_type_id','$transmission_id','$price','$description')
where Id ='$car_id' RETURNING id;";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result[0];
}

function DeleteCar($Id)
{
    global $db_handle;
    $query = "delete from car where id = '$Id'";
    $pg_query = pg_query($db_handle, $query);
    $result = pg_fetch_row($pg_query);
    return $result;
}
