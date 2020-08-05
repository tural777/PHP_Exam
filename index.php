<?php
session_start();
session_regenerate_id();

 
//repo
require_once "./DAL/DbConnection.php";
$db_handle = pg_connect($CONN_STRING);
//require_once "./DAL/AdminRepository.php";
require_once "./DAL/BodyTypeRepository.php";
require_once "./DAL/BrandRepository.php";
require_once "./DAL/CarImgRepository.php";
require_once "./DAL/CarRepository.php";
require_once "./DAL/CityRepository.php";
require_once "./DAL/ColorRepository.php";
require_once "./DAL/FuelTypeRepository.php";
require_once "./DAL/GearboxTypeRepository.php";
require_once "./DAL/ModelRepository.php";
require_once "./DAL/RoleRepository.php";
require_once "./DAL/TransmissionRepository.php";
require_once "./DAL/UserRepository.php";
//


include "login-register-post.php";



$isAuthenticate = isset($_SESSION['auth']);

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'login-register') {
        if ($isAuthenticate) {
            echo 'login-register';
            header("Location: ?page=main");
            exit;
        }
    }
}



// url
if (isset($_GET["page"]) && $_GET["page"] != "index") {
    $url = strval($_GET["page"]);
    if (strpos($url, "?")) {
        $index = strpos($url, "?");
        $rest = substr($url, 0, $index);
        $page =  $rest .= ".php";
    } else {
        $page = $_GET["page"] . ".php";
    }
} else {
    $page = "main.php";
}


// file exists
if (!file_exists($page)) $page = "404.php";



// foreach(GetAllCars() as $x => $x_value) {
//     //echo "Key=" . $x . ", Value=" . $x_value;
//     //echo "<br>";
//     foreach($x_value as $inX => $inX_value) {
//         echo "Key=" . $inX . ", Value=" . $inX_value;
//         echo "<br>";
//     }
//     echo "<br> <br>";
// }


include "header.php";
include $page;
include "footer.php";
//Repo
pg_close($db_handle);
//