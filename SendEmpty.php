<?php
header('Content-type: application/json;charset=utf-8');
$json = file_get_contents('people_number_for_pictures.json');
echo $json;