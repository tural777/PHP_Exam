<?php

function ShowAllTables()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT table_name
    FROM information_schema.tables
    WHERE table_schema='public'
     AND table_type='BASE TABLE'");
     
    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}
function GetAllCars()
{
    global $db_handle;
    
    $pg_query = pg_query($db_handle, "
select  Car.Id,Title,IsActive,City.Name as Cities,Brand.Name as Brands,model.Name as Models,
Year,Body_type.Name as BodyTypes,Color.Name as Colors,EngineCapacity,HP,Fuel_type.Name as FuelTypes,Mileage,
Gearbox_type.Name as GearboxTypes,Transmission.Name as Transmissions,Price,Description from car
    left join \"user\" u on Car.User_Id = u.Id
    left join  city on Car.City_Id = city.Id
    left join  model on Car.Model_Id = model.Id
    left join  brand on Model.Brand_id = Brand.Id
    left join  body_type  on Car.Body_type_Id = Body_type.id
    left join  color  on Car.Color_Id = color.Id
    left join  fuel_type  on Car.Fuel_type_Id =Fuel_type.Id
    left join  gearbox_type  on Car.Gearbox_type_Id = Gearbox_type.Id
    left join  transmission  on Car.Transmission_Id = transmission.Id
    order by added desc;
");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllColors()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM color;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}



function GetAllCities()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM city;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllFuelTypes()
{
    global $db_handle;
    
    $pg_query = pg_query($db_handle, "SELECT * FROM fuel_type;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllGearboxTypes()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM gearbox_type;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllTransmissions()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM transmission;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllBodyTypes()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM body_type;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllModels()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT
	Model.Id,
	Model.Name,
	Brand.Name as Brands
FROM
	Model
LEFT JOIN Brand ON Model.brand_id = Brand.id;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllBrands()
{
    global $db_handle;
   
    $pg_query = pg_query($db_handle, "SELECT * FROM brand;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllUsers()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, 
    'select "user".Id,"user".name,surname,Email,Password,Role.Name as Roles from "user"
    left join Role on Role_Id = Role.Id');

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}


function GetAllRoles()
{
    global $db_handle;

    $pg_query = pg_query($db_handle, "SELECT * FROM role;");

    return pg_fetch_all($pg_query, PGSQL_ASSOC);
}




function GenericInsertOnlyOneColumn($table, $value)
{
    global $db_handle;

    $query = "insert into $table (name)
    values ('$value')";
    
    pg_query($db_handle, $query);
}



function InsertModel($name, $brandId)
{
    global $db_handle;

    $query = "insert into model (name, brand_id)
    values ('$name', $brandId)";
    
    pg_query($db_handle, $query);
}



function InsertUser($name, $surname, $email, $password, $role_id)
{
    global $db_handle;
    $query = "insert into \"user\" (email, password,role_id,name,surname) 
    values ('$email','$password','$role_id','$name','$surname')";
    $pg_query = pg_query($db_handle, $query);
    //$result = pg_fetch_row($pg_query);
    //return $result[0];
}


function InsertCar($user_id, $title ,$city_id, $model_id, $year, $body_type_id, $color_id, $engineCapacity, $HP, $fuel_type_id, $mileage, $gearbox_type_id, $transmission_id, $price, $description, $Images = null, $isActive = 0)
{
    global $db_handle;
    $query = "insert into car (User_Id,Title, IsActive,City_Id,Model_Id, Year,Body_type_Id,Color_Id, EngineCapacity, HP,Fuel_type_Id, Mileage,Gearbox_type_Id,transmission_id, Price, Description)
    values ('$user_id','$title','$isActive','$city_id','$model_id','$year','$body_type_id','$color_id','$engineCapacity','$HP','$fuel_type_id','$mileage','$gearbox_type_id','$transmission_id','$price','$description') RETURNING id;";
    pg_query($db_handle, $query);
    
}


function GenericDeleteById($table, $Id){
    global $db_handle;
    $query = "delete from \"$table\" where id = '$Id'";
    pg_query($db_handle, $query);
}


function GenericUpdate($id, $name, $tableName){
    global $db_handle;
    $query = "update $tableName set name = '$name' where id = '$id'";
    pg_query($db_handle, $query);
}


function UpdateUser($userId, $name, $surname, $email, $password, $role_id)
{
    global $db_handle;
    $query = "update \"user\" set (name,surname,email,password,role_id) = ('$name','$surname','$email','$password','$role_id') where id = '$userId'";
    pg_query($db_handle, $query);
}


function UpdateCar($car_id, $title, $isActive, $city_id, $model_id, $year, $body_type_id, $color_id, $engineCapacity, $HP, $fuel_type_id, $mileage, $gearbox_type_id, $transmission_id, $price, $description)
{
    global $db_handle;
    $query = "update car set (updated,Title, IsActive,City_Id,Model_Id, Year,Body_type_Id,Color_Id, EngineCapacity, HP,Fuel_type_Id, Mileage,Gearbox_type_Id,transmission_id, Price, Description) 
    = ('now()','$title','$isActive','$city_id','$model_id','$year','$body_type_id','$color_id','$engineCapacity','$HP','$fuel_type_id','$mileage','$gearbox_type_id','$transmission_id','$price','$description')
    where Id ='$car_id'";
    pg_query($db_handle, $query);
}



?>