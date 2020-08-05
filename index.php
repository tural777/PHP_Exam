<?php
session_start();
session_regenerate_id();
require "./DAL/UserRepository.php";
require "./DAL/CarRepository.php";
require "./DAL/RoleRepository.php";

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

//session_start();
//    if (isset($_SESSION['auth'])) {
//        if($_SESSION['auth']['role'] != 'Admin')
//        header("Location: ?page=login-register");
//    }else{
//        header("Location: index.php?page=login-register");
//    }




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

