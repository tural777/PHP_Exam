<?php

// url
if(isset($_GET["page"]) && $_GET["page"] != "index"){
    $page = $_GET["page"] . ".php";
}else{
    $page ="main.php";
}


// file exists
if (!file_exists($page)) $page ="404.php";



include "header.php";
include $page;
include "footer.php";

?>



 