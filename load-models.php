<?php
require "./DAL/ModelRepository.php";
echo "<option value=\"\" selected>All</option>";

if (isset($_POST["brand_id"])) {
    if ($_POST["brand_id"] != "") {
        $models = GetModelsByBrandId($_POST['brand_id']);
        foreach ($models as $model) {
            echo "<option value='$model[id]'>$model[name]</option>";
        }
    }
}
