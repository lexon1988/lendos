<?php

$page = $_GET['page'];

$j = 1;
for ($i = 1; $i < 50; $i++) {

    if (file_exists("html/" . $page . "/" . $i . ".txt")) {

        $j++;

    }

}

file_put_contents("html/" . $page . "/" . $j . ".txt", "");
header("Location: blocks.php?page=" . $page."#down");

?>