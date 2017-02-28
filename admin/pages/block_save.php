<?php
$text=$_POST['text'];
$block_num=$_POST['block_num'];
$page=$_POST['page'];

file_put_contents("html/".$page."/".$block_num.".txt",$text);

header("Location: blocks.php?page=".$page."#b".$block_num);

?>