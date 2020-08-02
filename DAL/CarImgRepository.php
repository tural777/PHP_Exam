<?php
require "DbConnection.php";


function GetCarImgByCarId($CarId)
{
    if (!$CarId) {
        throw new Exception("Id Must provided");
    }
    global $CONN_STRING;
    $db_handle = pg_connect($CONN_STRING);
    $query = "select * from car_img where car_id = '$CarId';";
    $pg_query = pg_query($db_handle, $query);

    $arr = pg_fetch_all($pg_query, PGSQL_ASSOC);
    pg_close($db_handle);
    return $arr;
}

function InsertCarImg($carImgNames, $carId)
{
    if (is_array($carImgNames)) {
        global $CONN_STRING;
//        $db_handle = pg_connect($CONN_STRING);
        $query = "insert into car_img (car_id, img_path) values ";
        foreach ($carImgNames as $value) {
            $query = $query . "('$carId','$value'),";
        }
        $query = substr($query, 0, -1);


        $pg_query = pg_query( $query);
        $result = pg_fetch_row($pg_query);
//        pg_close($db_handle);
        return $result;
    }
}
