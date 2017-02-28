<?php

$block = $_GET['block'];
$page = $_GET['page'];
unlink("html/" . $page . "/" . $block . ".txt");
header("Location: blocks.php?page=" . $page . "#down");

?>