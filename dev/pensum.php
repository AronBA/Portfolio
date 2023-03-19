<?php


$parts = explode("/",$_SERVER["REQUEST_URI"]);

$data = file_get_contents("zimmer.json");


print_r($data);


