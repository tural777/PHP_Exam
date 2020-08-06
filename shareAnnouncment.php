<?php

$title = "title";
$description = "desc";
$brandId = isset($_POST["brandId"]) ? $_POST["brandId"] : 0;
$modelId = isset($_POST["modelId"]) ? $_POST["modelId"] : 0;
$banTypeId = isset($_POST["banTypeId"]) ? $_POST["banTypeId"] : 0;
$colorId = isset($_POST["colorId"]) ? $_POST["colorId"] : 0;
$mileage = isset($_POST["mileage"]) ? $_POST["mileage"] : 0;
$price = isset($_POST["price"]) ? $_POST["price"] : 0;
$cityId = isset($_POST["cityId"]) ? $_POST["cityId"] : 0;
$fuelTypeId = isset($_POST["fuelTypeId"]) ? $_POST["fuelTypeId"] : 0;
$teersId = isset($_POST["teersId"]) ? $_POST["teersId"] : 0;
$gearboxTypeId = isset($_POST["gearboxTypeId"]) ? $_POST["gearboxTypeId"] : 0;
$year = isset($_POST["year"]) ? $_POST["year"] : 0;
$engineCapacity = isset($_POST["engineCapacity"]) ? $_POST["engineCapacity"] : 0;
$enginePower = isset($_POST["enginePower"]) ? $_POST["enginePower"] : 0;

echo $brandId;
echo $modelId;
echo $banTypeId;

if (isset($_POST["brandId"])) {
    InsertCar(
        1,
        $cityId,
        $modelId,
        $year,
        $banTypeId,
        $colorId,
        $engineCapacity,
        $enginePower,
        $fuelTypeId,
        $mileage,
        $gearboxTypeId,
        $teersId,
        $price,
        $description
    );
}


$models = GetAllModels();
$brands = GetAllBrands();
$bodies = GetAllBodyTypes();
$fuelTypes = GetAllFuelTypes();
$teers = GetAllTransmissions();
$gearboxTypes = GetAllGearboxTypes();
$cities = GetAllCities();
$colors = GetAllColors();
$name = 'name';
$id = 'id';
?>
<main>
    <form class="was-validated" action="?page=shareAnnouncment" method="POST">
        <div class='container mt-5'>
            <div class='row'>
                <div class='col-md-6'>
                    <div class='form-group row'>
                        <label class='col-sm-3 col-form-label'>Marka</label>
                        <select name="brandId" class='form-control col-sm-8 custom-select' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($brands as $key => $value) {
                                echo "<option name = '$value[$id]' value = '$value[$id]'>$value[$name]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label class='col-sm-3 col-form-label'>Model</label>
                        <select name="modelId" class='form-control col-sm-8 custom-select' required>";
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($models as $key => $value) {
                                echo "<option value = '$value[$id]'>$value[$name]</option>";
                            } ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label class='col-sm-3 col-form-label'>Ban növü</label>
                        <select name="banTypeId" class='form-control col-sm-8 custom-select' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($bodies as $key => $value) {
                                echo "<option value = '$value[$id]'>$value[$name]</option>";
                            } ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label for='mileage' class='col-sm-3 col-form-label'>Yürüş , km</label>
                        <input type='number' name="mileage" class='form-control col-sm-8' id='inputMileage' required>
                    </div>

                    <div class='form-group row'>
                        <label for='price' class='col-sm-3 col-form-label'>Qiymət</label>
                        <input type='number' name="price" class='form-control col-sm-8' id='inputPrice' required>
                    </div>

                    <div class='form-group row'>
                        <label for='city' class='col-sm-3 col-form-label'>Şəhər</label>
                        <select name="cityId" class='form-control col-sm-8 custom-select' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($cities as $key => $value) {
                                echo "<option value = '$value[$id]'>$value[$name]</option>";
                            } ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label for='color' class='col-sm-3 col-form-label'>Rəng</label>
                        <select name="colorId" class='form-control  col-sm-8 custom-select' required>";
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($colors as $key => $value) {
                                echo "<option value = '$value[$id]'>$value[$name]</option>";
                            } ?>
                        </select>
                    </div>

                </div>

                <div class='col-md-6'>
                    <div class='form-group row'>
                        <label for='fuelType' class='col-sm-3 col-form-label'>Yanacaq növü</label>
                        <select name="fuelTypeId" class='form-control  col-sm-8 custom-select' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($fuelTypes as $key => $value) {
                                echo "<option value = '$value[$id]'>$value[$name]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label for='teers' class='col-sm-3 col-form-label'>Ötürücü</label>
                        <select name="teersId" class='form-control  col-sm-8  custom-select ' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($teers as $key => $value) {
                                echo "<option value = '$value[$id]'>$value[$name]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label for='gearboxType' class='col-sm-3 col-form-label'>Sürətlər qutusu</label>
                        <select name="gearboxTypeId" class='form-control  col-sm-8  custom-select ' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            foreach ($gearboxTypes as $key => $value) {
                                echo "<option value = '$value[$id]'>$value[$name]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label for='year' class='col-sm-3 col-form-label'>Buraxılış ili</label>
                        <select name="year" class='form-control  col-sm-8 custom-select ' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            for ($i = date("Y"); $i >= 1960; $i--) {
                                echo "<option>$i </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label for='engineCapacity' class='col-sm-3 col-form-label'>Mühərrik həcmi</label>
                        <select name="engineCapacity" class='form-control col-sm-8 custom-select ' required>
                            <?php
                            echo "<option value='' disabled selected>Select</option>";
                            for ($i = 1; $i <= 1600; $i++) {
                                echo "<option>" . (intval($i) * 10) . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class='form-group row'>
                        <label for='enginePower' class='col-sm-3 col-form-label'>Mühərrik gücü</label>
                        <input type='number' name="enginePower" class='form-control col-sm-8 is-invalid' id='inputEngineCapacity' required>
                    </div>

                </div>
            </div>
        </div>


        <button type='submit' class='btn btn-primary'>Paylaş</button>
    </form>
</main>