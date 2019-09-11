<?php

require 'class-http-request.php';

$api = 'bot#API_KEY#';
$idadmin = 000;	//ADMIN TELEGRAM ID
$adminID = $idadmin;
$userbot = 'BOT_NAME';
$botID = (int) substr(explode(":", $api, 2)[0], strlen("bot"));

$content = file_get_contents("php://input");
$update = json_decode($content, true);

$mysqli = mysqli_connect("DB_HOST", "DB_USER", "DB_PWD", "DB_NAME");

//date_default_timezone_set('Europe/Rome');

require '_config.php';
require '_comandi.php';

include 'inline.php';

$file = "input.json";
$f2 = fopen($file, 'w');
fwrite($f2, $content);
fclose($f2);



?>