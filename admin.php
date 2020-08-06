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





$allDbTableNames = ShowAllTables();
$action = isset($_GET["Action"]) ? $_GET["Action"] : "";
$tableName = isset($_GET["TableName"]) ? $_GET["TableName"] : $allDbTableNames[0]["table_name"];




if ($action != "") {
  $id = isset($_GET["Id"]) ? $_GET["Id"] : "";
  $name = isset($_GET["Name"]) ? $_GET["Name"] : "";
  $brandId = isset($_GET["Brands"]) ? $_GET["Brands"] : "";
  $surName = isset($_GET["Surname"]) ? $_GET["Surname"] : "";
  $email = isset($_GET["Email"]) ? $_GET["Email"] : "";
  $pass = isset($_GET["Password"]) ? $_GET["Password"] : "";
  $roleId = isset($_GET["Roles"]) ? $_GET["Roles"] : "";
  $title = isset($_GET["Title"]) ? $_GET["Title"] : "";
  $isActive = isset($_GET["Isactive"]) ? $_GET["Isactive"] : "";
  $cityId = isset($_GET["Cities"]) ? $_GET["Cities"] : "";
  $modelId = isset($_GET["Models"]) ? $_GET["Models"] : "";
  $year = isset($_GET["Year"]) ? $_GET["Year"] : "";
  $bodytypeId = isset($_GET["Bodytypes"]) ? $_GET["Bodytypes"] : "";
  $colorId = isset($_GET["Colors"]) ? $_GET["Colors"] : "";
  $enginecapacity = isset($_GET["Enginecapacity"]) ? $_GET["Enginecapacity"] : "";
  $hp = isset($_GET["Hp"]) ? $_GET["Hp"] : "";
  $fueltypeId = isset($_GET["Fueltypes"]) ? $_GET["Fueltypes"] : "";
  $mileage = isset($_GET["Mileage"]) ? $_GET["Mileage"] : "";
  $gearboxtypeId = isset($_GET["Gearboxtypes"]) ? $_GET["Gearboxtypes"] : "";
  $transmissionId = isset($_GET["Transmissions"]) ? $_GET["Transmissions"] : "";
  $price = isset($_GET["Price"]) ? $_GET["Price"] : "";
  $description = isset($_GET["Description"]) ? $_GET["Description"] : "";



  //Working with DB
  switch ($action) {
    case "Add":
      if ($tableName == "model") InsertModel($name, $brandId);
      elseif ($tableName == "user") InsertUser($name, $surName, $email, $pass, $roleId);
      elseif ($tableName == "car") InsertCar(
        1,
        $title,
        $cityId,
        $modelId,
        $year,
        $bodytypeId,
        $colorId,
        $enginecapacity,
        $hp,
        $fueltypeId,
        $mileage,
        $gearboxtypeId,
        $transmissionId,
        $price,
        $description
      );
      else GenericInsertOnlyOneColumn($tableName, $name);
      break;

    case "Del":
      GenericDeleteById($tableName, $id);
      break;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
  <title>Admin</title>

  <style>
    #tableNames li a:hover {
      color: teal  !important;
      
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="h1 text-light pl-5 mx-auto" style="text-decoration: none;" href="admin.php">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light collapse shadow">
        <h1 class="text-center mt-2 h2">Tables</h1>

        <div class="sidebar-sticky pt-3 text-center">
          <ul id="tableNames" style="border-radius: 25px; " class="bg-dark m-0 mb-3 p-0 border  shadow nav flex-column">

            <?php
            foreach ($allDbTableNames as $index => $arr) {
              foreach ($arr as $key => $value) {
                if ($value != "car_img") {
                  echo '<li class="nav-item">
                              <a class="nav-link text-light" href="?TableName=' . $value . '"><b>' . ucfirst($value) . '</b></a></li>';
                }
              }
            }

            ?>

            <li class=" text-light border-bottom nav-item">
              <a class="nav-link  text-light h6  mt-5 mb-0" href="index.php?page=main"><i class="mr-2 fas fa-home"></i>Home</a>
            </li>

            <li class=" text-light nav-item">
              <a class="nav-link  text-light h6  mt-0" href="index.php?page=login-register"><i class="mr-2 fas fa-sign-out-alt"></i>Sign out</a>
            </li>

          </ul>

        </div>
      </nav>


      <main role="main" class="col-md-9 col-lg-10 my-auto">


        <div class="table-responsive mt-5">
          <?php AddSelectedTableContent($tableName); ?>
        </div>


      </main>







      <?php


      function AddSelectedTableContent($tableName)
      {

        $arrayAssoc = array();
        if ($tableName == "body_type") $arrayAssoc = GetAllBodyTypes();
        elseif ($tableName == "brand") $arrayAssoc = GetAllBrands();
        elseif ($tableName == "color") $arrayAssoc = GetAllColors();
        elseif ($tableName == "car") $arrayAssoc = GetAllCars();
        elseif ($tableName == "city") $arrayAssoc = GetAllCities();
        elseif ($tableName == "fuel_type") $arrayAssoc = GetAllFuelTypes();
        elseif ($tableName == "gearbox_type") $arrayAssoc = GetAllGearboxTypes();
        elseif ($tableName == "model") $arrayAssoc = GetAllModels();
        elseif ($tableName == "role") $arrayAssoc = GetAllRoles();
        elseif ($tableName == "transmission") $arrayAssoc = GetAllTransmissions();
        elseif ($tableName == "user") $arrayAssoc = GetAllUsers();
        else echo "Not Found";


      ?>
      
      
        <h3 >Table name:  <?=$tableName?></h3>
        <table style="border:3px solid teal;" class="shadow table-hover table table-striped table-sm  text-center">

          <thead class="table-dark">
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

              echo "<form><tr>";
              foreach ($array as $Key => $Value) {
                echo "<td>$Value</td>";

                if (ucfirst($Key) == "Id") {
                  echo '<input name= "Id" type="hidden" value="' . $Value . '">';
                }
              }

              echo '<td>
                    <div class="btn-group btn-group-sm" role="group">
                        <input name= "TableName" type="hidden" value="' . $tableName . '">
                        <input name= "Action"    type="hidden" value="Del" >
                        <button type="submit" class="btn btn-info   btn-sm"><i class="far fa-edit"></i></button>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </div>
                </td>';


              echo "</tr></form>";





              // Foreach last iteration
              if (!--$TempAssArrLength) {

                echo "<form><tr>";

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
                        if (ucfirst($Key) == "Id")
                          echo '<option value="' . $Value . '">';
                        elseif (ucfirst($Key) == "Name")
                          echo $Value . '</option>';
                      }
                    }


                    echo '</select>';
                  } elseif (ucfirst($Key) == "Id") {
                    echo '<input disabled class="form-control" placeholder="' . ucfirst($Key) . '">';
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


                echo "</tr></form>";
              }
            }


            ?>

          </tbody>

        </table>

      <?php
      }

      pg_close($db_handle);
      ?>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>

</html>