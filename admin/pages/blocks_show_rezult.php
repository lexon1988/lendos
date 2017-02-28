<?php


$page = $_GET['page'];

for($i=1;$i<50; $i++){

if (file_exists("html/" . $page . "/" . $i . ".txt")) {
    echo $file = file_get_contents("html/" . $page . "/" . $i . ".txt");

    }
}

?>