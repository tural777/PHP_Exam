<?php

require "./DAL/CarRepository.php";


// url
if(isset($_GET["page"]) && $_GET["page"] != "index"){
    $page = $_GET["page"] . ".php";
}else{
    $page ="main.php";
}



foreach(GetAllCars() as $x => $x_value) {
    //echo "Key=" . $x . ", Value=" . $x_value;
    //echo "<br>";
    foreach($x_value as $inX => $inX_value) {
        echo "Key=" . $inX . ", Value=" . $inX_value;
        echo "<br>";
    }
    echo "<br> <br>";
  }


// file exists
if (!file_exists($page)) $page ="404.php";



include "header.php";
include $page;
include "footer.php";

?>



 