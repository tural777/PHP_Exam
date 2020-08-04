<?php


require "./DAL/BodyTypeRepository.php";
require "./DAL/ModelRepository.php";
require "./DAL/TransmissionRepository.php";
require "./DAL/FuelTypeRepository.php";
require "./DAL/GearboxTypeRepository.php";



$getAllCars = GetAllCars();
//$getAllUsers = GetAllUsers();
//$getAllBrands = GetAllBrands();
//$getAllCity = GetAllCities();


ShowTables($getAllCars, "Cars");
//ShowTables($getAllUsers, "Users");
//ShowTables($getAllBrands, "Brands");
//ShowTables($getAllCity, "Cities");





function ShowTables($arrayAssoc, $tableName)
{
?>
    <div class="m-3 p-1 shadow-sm border border-warning rounded">

        <a class="display-4" id="testtt" data-toggle="collapse" href="#<?= $tableName ?>" aria-expanded="false" aria-controls="#<?= $tableName ?>"><?= $tableName ?></a>

        <div class="row">

            <div class="col-12">
                <div class="collapse multi-collapse" id="<?= $tableName ?>">
                    <div class="card card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-sm  table-hover text-center">

                                <thead class="thead-dark">
                                    <tr >

                                        <?php

                                        foreach ($arrayAssoc as $count => $array) {
                                            foreach ($array as $Key => $Value) {
                                                echo '<th class="px-5">' . ucfirst($Key) . '</th>';
                                            }
                                            echo "<th>Control</th>";
                                            break;
                                        }

                                        ?>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php


                                    $TempAssArrLength = count($arrayAssoc);
                                    foreach ($arrayAssoc as $index => $array) {

                                        echo "<tr>";
                                        foreach ($array as $Key => $Value) {
                                            echo "<td>$Value</td>";
                                        }

                                        echo '<td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a class="btn btn-info btn-sm" href="#"><i class="far fa-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>';


                                        echo "</tr>";





                                        // Foreach last iteration
                                        if (!--$TempAssArrLength) {

                                            echo "<tr>";

                                            foreach ($array as $Key => $Value) {

                                                echo '<td>';

                                                if (function_exists("GetAll" . $Key. "s") || function_exists("GetAll" . $Key)) {
                                                    echo '<select class="form-control">
                                                            <option selected disabled>' . ucfirst($Key) .'</option>';
                                                            
                                                            $TempAddFuncForAdmin = "GetAll" . $Key. "s";

                                                            foreach ($TempAddFuncForAdmin() as $index => $array) {
                                                                foreach ($array as $Key => $Value) {
                                                                    if(ucfirst($Key) == "Name")
                                                                    echo '<option> '. $Value .'</option>';
                                                                } 
                                                            }


                                                    echo '</select>';

                                                }elseif(ucfirst($Key) == "Id"){
                                                    echo '<input readonly class="form-control" placeholder="' .ucfirst($Key) . '">';

                                                }elseif(ucfirst($Key) == "Img_path"){
                                                    echo    '<div class="form-group"><label class="form-control" for="file-upload" style="border: 1px solid #ccc; display: inline-block; padding: 6px 12px; cursor: pointer;">
                                                                <i class="fas fa-cloud-upload-alt"></i> Custom
                                                            </label>
                                                             <input  id="file-upload" style="display: none;" type="file" multiple/></div>';
                                                }
                                                 else {
                                                    echo '<input class="form-control" placeholder="' .ucfirst($Key) . '">';
                                                }
                                                echo '</td>';
                                            }

                                            echo '<td>
                                                        <a class="btn btn-primary btn-sm" style="width: 65px; height:37px;" href="#">
                                                            <i class="fas fa-plus-circle fa-lg pt-2"></i></a>
                                                </td>';


                                            echo "</tr>";
                                        }
                                    }


                                    ?>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

<?php
}
?>