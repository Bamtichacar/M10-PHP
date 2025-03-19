<?php

$mesPrefs = $_POST;
$newPrefs = serialize($mesPrefs);
setcookie("mesPrefs", $newPrefs, time() -0,"/");
header("location : user.php");

var_dump($newPrefs);
var_dump($_POST);
