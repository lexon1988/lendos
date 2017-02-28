<?php

$page_name = $_POST['page_name'];

$filename = "html/" . $page_name;

if (file_exists($filename)) {
    echo "Такая страница уже создана!<br><a href='index.php'><< Вернуться назад</a>";
} else {
    mkdir("html/" . $page_name);
    file_put_contents("html/" . $page_name . "/1.txt", "");
    header("Location: index.php");

}


?>