<?php

$page = $_GET['page'];
$save="";

for ($i = 1; $i < 50; $i++) {

    if (file_exists("html/" . $page . "/" . $i . ".txt")) {

        $file = file_get_contents("html/" . $page . "/" . $i . ".txt");
        $save = $save . $file;

    }
}

file_put_contents("../../".$page,$save);
header("Location: blocks.php?page=".$page);

?>