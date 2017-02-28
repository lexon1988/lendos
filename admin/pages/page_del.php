<?php

$page = $_GET['page'];

for ($i = 1; $i < 50; $i++) {

    if (file_exists("html/" . $page . "/" . $i . ".txt")) {

        unlink("html/" . $page . "/" . $i . ".txt");

    }
}

rmdir("html/" . $page);

header("Location: index.php");
?>