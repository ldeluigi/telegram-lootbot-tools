<?php

require 'class-http-request.php';

$api = $_GET['api'];
$idadmin = $_GET['admin'];
$adminID = $idadmin;
$userbot = $_GET['userbot'];
$botID = (int) substr(explode(":", $api, 2)[0], strlen("bot"));

$content = file_get_contents("php://input");
$update = json_decode($content, true);

mysql_select_db('my_db');
require '_config.php';
require '_comandi.php';

include 'inline.php';

$file = "input.json";
$f2 = fopen($file, 'w');
fwrite($f2, $content);
fclose($f2);



?>