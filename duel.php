<?php
session_start();
$json = file_get_contents("characters.json");
$datas = json_decode($json);




