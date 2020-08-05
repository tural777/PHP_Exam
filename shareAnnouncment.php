   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

   <body>

       <?php

        // require './DAL/CarRepository.php';
        // require './DAL/ModelRepository.php';
        // require './DAL/BodyTypeRepository.php';
        // require './DAL/FuelTypeRepository.php';
        // require './DAL/TransmissionRepository.php';
        // require './DAL/GearboxTypeRepository.php';
        //require './DAL/CityRepository.php';


        $models = GetAllModels();
        $brands = GetAllBrands();
        $bodies = GetAllBodyTypes();
        $fuelTypes = GetAllFuelTypes();
        $teers = GetAllTransmissions();
        $gearboxTypes = GetAllGearboxTypes();
        //$cities = GetAllCities();
        $name = 'name';
        $id = 'id';


        $brand = isset($_GET["brand"]) ? $_GET["brand"] : "";
        $model = isset($_GET["model"]) ? $_GET["model"] : "";
        $banType = isset($_GET["banType"]) ? $_GET["banType"] : "";
        $mileage = isset($_GET["mileage"]) ? $_GET["mileage"] : "";
        $price = isset($_GET["price"]) ? $_GET["price"] : "";
        $fuelType = isset($_GET["fuelType"]) ? $_GET["fuelType"] : "";
        $teers = isset($_GET["teers"]) ? $_GET["teers"] : "";
        $gearboxType = isset($_GET["gearboxType"]) ? $_GET["gearboxType"] : "";
        $year = isset($_GET["year"]) ? $_GET["year"] : "";
        $engineCapacity = isset($_GET["engineCapacity"]) ? $_GET["engineCapacity"] : "";
        $enginePower = isset($_GET["enginePower"]) ? $_GET["enginePower"] : "";


        // InsertCar(1, 1, 1, $year, 1, 1, $engineCapacity, $enginePower, 1, $mileage, 1, 1, $price, "au");


        ?>
       <form>
           <div class='container mt-5'>
               <div class='row'>
                   <div class='col-md-6'>
                       <div class='form-group row'>
                           <label class='col-sm-3 col-form-label'>Marka</label>
                           <select name="brand" class='form-control col-sm-8'>
                               <?php
                                foreach ($brands as $key => $value) {
                                    echo "<option id = '$value[$id]'>$value[$name]</option>";
                                }
                                ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='model' class='col-sm-3 col-form-label'>Model</label>
                           <select name="model" class='form-control  col-sm-8'>";
                               <?php
                                foreach ($models as $key => $value) {
                                    echo "<option>$value[$name]</option>";
                                } ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='banType' class='col-sm-3 col-form-label'>Ban növü</label>
                           <select name="banType" class='form-control col-sm-8'>
                               <?php
                                foreach ($bodies as $key => $value) {
                                    echo "<option>$value[$name]</option>";
                                } ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='mileage' class='col-sm-3 col-form-label'>Yürüş , km</label>
                           <input type='number' name="mileage" class='form-control col-sm-8' id='inputMileage'>
                       </div>

                       <div class='form-group row'>
                           <label for='price' class='col-sm-3 col-form-label'>Qiymət</label>
                           <input type='number' name="price" class='form-control col-sm-8' id='inputPrice'>
                       </div>

                       <div class='form-group row'>
                           <label for='city' class='col-sm-3 col-form-label'>Şəhər</label>
                           <select name="city" class='form-control col-sm-8'>
                               <?php
                                foreach ($cities as $key => $value) {
                                    echo "<option>$value[$name]</option>";
                                } ?>
                           </select>
                       </div>

                   </div>

                   <div class='col-md-6'>
                       <div class='form-group row'>
                           <label for='fuelType' class='col-sm-3 col-form-label'>Yanacaq növü</label>
                           <select name="fuelType" class='form-control  col-sm-8'>
                               <?php
                                foreach ($fuelTypes as $key => $value) {
                                    echo "<option>$value[$name]</option>";
                                }
                                ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='teers' class='col-sm-3 col-form-label'>Ötürücü</label>
                           <select name="teers" class='form-control  col-sm-8'>
                               <?php
                                foreach ($teers as $key => $value) {
                                    echo "<option>$value[$name]</option>";
                                }
                                ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='gearboxType' class='col-sm-3 col-form-label'>Sürətlər qutusu</label>
                           <select name="gearboxType" class='form-control  col-sm-8'>
                               <?php
                                foreach ($gearboxTypes as $key => $value) {
                                    echo "<option>$value[$name]</option>";
                                }
                                ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='year' class='col-sm-3 col-form-label'>Buraxılış ili</label>
                           <select name="year" class='form-control  col-sm-8'>
                               <?php
                                for ($i = date("Y"); $i >= 1960; $i--) {
                                    echo "<option>$i </option>";
                                }
                                ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='engineCapacity' class='col-sm-3 col-form-label'>Mühərrik həcmi</label>
                           <select name="engineCapacity" class='form-control col-sm-8'>
                               <?php
                                for ($i = 1; $i <= 1600; $i++) {
                                    echo "<option>" . (intval($i) * 10) . "</option>";
                                }
                                ?>
                           </select>
                       </div>

                       <div class='form-group row'>
                           <label for='enginePower' class='col-sm-3 col-form-label'>Mühərrik gücü</label>
                           <input type='number' name="enginePower" class='form-control col-sm-8' id='inputEngineCapacity'>
                       </div>

                   </div>
               </div>
           </div>
           <button type='submit' class='btn btn-primary'>Paylaş</button>
       </form>
   </body>