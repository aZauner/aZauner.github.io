<?php
$name = "";
$date = "";
$kunden = "";

$name = $_GET["name"];
$date = $_GET["date"];
$kunden = $_GET["kunden"];

$newProj = array("name"=>$name, "date"=>$date, "kunden"=>$kunden, "tasks"=>array());
$projects = json_decode(file_get_contents("../json/projects.json"));
array_push($projects, $newProj);
$projectsStr = json_encode($projects);
file_put_contents("../json/projects.json", $projectsStr);

echo "";
?>