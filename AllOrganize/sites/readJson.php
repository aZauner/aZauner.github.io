<?php
$id = $_GET['id'];

$str = file_get_contents("../json/".$id.".json");

echo $str;
?>