<?php


function GetAllCars()
{
    global $db_handle;
    
    $pg_query = pg_query($db_handle, "
select distinct Car.Id,Title,IsActive,added,updated, City.Name as Cities,Brand.Name as Brand,model.Name as Model,
Year,Body_type.Name as BodyType,Color.Name as Color,EngineCapacity,HP,Fuel_type.Name as FuelType,Mileage,
Gearbox_type.Name as GearboxType,Transmission.Name as Transmission,Price,Description from car
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

    $pg_query = pg_query($db_handle, "SELECT * FROM \"user\";");

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


?>