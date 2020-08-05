<?php
$CONN_STRING ="host='134.122.72.17' port='5432' dbname='phpstepproject' user='phpstepproject' password='phpstepproject'";
$db_handle = pg_connect($CONN_STRING);
require_once "./DAL/ModelRepository.php";

echo "<option value=\"\" selected>All</option>";


if (isset($_POST["brand_id"])) {
    if ($_POST["brand_id"] != "") {
        $models = GetModelsByBrandId($_POST['brand_id']);
        foreach ($models as $model) {
            echo "<option value='$model[id]'>$model[name]</option>";
        }
    }
}

pg_close($db_handle);
