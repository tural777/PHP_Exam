<?php
//session_start();
//session_regenerate_id();
//    if (isset($_SESSION['auth'])) {
//        if($_SESSION['auth']['role'] != 'Admin')
//        header("Location: index.php?page=login-register");
//    }else{
//        header("Location: index.php?page=login-register");
//    }
require_once "./DAL/DbConnection.php";
$db_handle = pg_connect($CONN_STRING);
require_once "./DAL/AdminRepository.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <title>Admin</title>
</head>

<body>

    <header>
        <h1 class="text-center display-1">Admin</h1>
    </header>





    <?php


    require "./DAL/AdminRepository.php";



    $action = isset($_GET["Action"]) ? $_GET["Action"] : "";
    $tableName = isset($_GET["TableName"]) ? $_GET["TableName"] : "";
    $name = isset($_GET["Name"]) ? $_GET["Name"] : "";
    //$brandId= isset($_GET["BrandId"]) ? $_GET["BrandId"] : "";


    //Testing
    //echo "Action: " . $action;
    //echo "TableName: " . $tableName;
    //echo "Name: " . $name;
    //echo "BrandId: " . $brandId;



    //Working with DB
    switch ($action) {
        case "Add":
            if ($tableName == "BodyTypes")  GenericInsertOnlyOneColumn("body_type", $name);
            elseif ($tableName == "Brands") GenericInsertOnlyOneColumn("brand", $name);
            elseif ($tableName == "Cities") GenericInsertOnlyOneColumn("city", $name);
            elseif ($tableName == "Colors") GenericInsertOnlyOneColumn("color", $name);
            elseif ($tableName == "FuelTypes") GenericInsertOnlyOneColumn("fuel_type", $name);
            elseif ($tableName == "GearboxTypes") GenericInsertOnlyOneColumn("gearbox_type", $name);
            elseif ($tableName == "Roles") GenericInsertOnlyOneColumn("role", $name);
            elseif ($tableName == "Transmissions") GenericInsertOnlyOneColumn("transmission", $name);
            //elseif($tableName == "Models") InsertModel("model", $name, $brandId);
            break;
    }



    $getAllBodyTypes = GetAllBodyTypes();           //+
    $getAllBrands = GetAllBrands();                 //+
    $getAllCars = GetAllCars();                     //-
    $getAllCities = GetAllCities();                 //+
    $getAllColors = GetAllColors();                 //+
    $getAllFuelTypes = GetAllFuelTypes();           //+
    $getAllGearboxTypes = GetAllGearboxTypes();     //+
    $getAllModels = GetAllModels();                 //-
    $getAllRoles = GetAllRoles();                   //+
    $getAllTransmissions = GetAllTransmissions();   //+
    $getAllUsers = GetAllUsers();                   //-



    //Call Functions with Table Name
    ShowTables($getAllBodyTypes, "BodyTypes");
    ShowTables($getAllBrands, "Brands");
    ShowTables($getAllCars, "Cars");
    ShowTables($getAllCities, "Cities");
    ShowTables($getAllColors, "Colors");
    ShowTables($getAllFuelTypes, "FuelTypes");
    ShowTables($getAllGearboxTypes, "GearboxTypes");
    ShowTables($getAllModels, "Models");
    ShowTables($getAllRoles, "Roles");
    ShowTables($getAllTransmissions, "Transmissions");
    ShowTables($getAllUsers, "Users");



    function ShowTables($arrayAssoc, $tableName)
    {
    ?>


        <div class="m-3 mb-4 p-2 shadow-sm border rounded">

            <a style="text-decoration: none;" class="display-4 btn-block mb-2" data-toggle="collapse" href="#<?= $tableName ?>"><?= $tableName ?><i class="fas fa-arrows-alt-v fa-xs text-dark mt-3" style="float:right;"></i></a>


            <div class="row">

                <div class="col-12">
                    <div class="collapse multi-collapse" id="<?= $tableName ?>">
                        <div class="card card-body">

                            <div class="table-responsive">
                                <table class="table table-striped table-sm  table-hover text-center">

                                    <thead class="thead-dark">
                                        <tr>

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

                                                echo "<tr><form>";

                                                foreach ($array as $Key => $Value) {

                                                    echo '<td>';

                                                    if (function_exists("GetAll" . ucfirst($Key) . "s") || function_exists("GetAll" . ucfirst($Key))) {
                                                        echo '<select name="' . ucfirst($Key) . '" class="form-control">';

                                                        $TempAddFuncForAdmin = "GetAll" . ucfirst($Key);

                                                        if (!function_exists($TempAddFuncForAdmin)) {
                                                            $TempAddFuncForAdmin = "GetAll" . ucfirst($Key) . "s";
                                                        }


                                                        foreach ($TempAddFuncForAdmin() as $index => $array) {
                                                            foreach ($array as $Key => $Value) {
                                                                if (ucfirst($Key) == "Name")
                                                                    echo '<option> ' . $Value . '</option>';
                                                            }
                                                        }


                                                        echo '</select>';
                                                    } elseif (ucfirst($Key) == "Id") {
                                                        echo '<input name="' . ucfirst($Key) . '" readonly class="form-control" placeholder="' . ucfirst($Key) . '">';
                                                    }
                                                    //elseif (ucfirst($Key) == "Img_path") {
                                                    //     echo    '<div class="form-group"><label class="form-control" for="file-upload" style="border: 1px solid #ccc; display: inline-block; padding: 6px 12px; cursor: pointer;">
                                                    //             <i class="fas fa-cloud-upload-alt"></i> Custom
                                                    //         </label>
                                                    //             <input  id="file-upload" style="display: none;" type="file" multiple/></div>';
                                                    // } 
                                                    else {
                                                        echo '<input name="' . ucfirst($Key) . '" class="form-control" placeholder="' . ucfirst($Key) . '">';
                                                    }
                                                    echo '</td>';
                                                }

                                                echo    '<td>
                                            <input value="' . $tableName . '" name="TableName" type="hidden">
                                            <input value="Add" name="Action" type="hidden">
                                            <input type="submit" value="Add" style="width: 65px;" class="btn btn-primary">';


                                                echo "</form></tr>";
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
    pg_close($db_handle);
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>

</html>