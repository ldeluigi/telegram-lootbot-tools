<?php

require 'class-http-request.php';

$api = 'bot433552551:AAEdpLr4Wy8o38k3JghWQGYA1QlBMHhYxxE';
$idadmin = 340271798;
$adminID = $idadmin;
$userbot = 'ToolsForLootBot';
$botID = (int) substr(explode(":", $api, 2)[0], strlen("bot"));

$content = file_get_contents("php://input");
$update = json_decode($content, true);

$mysqli = mysqli_connect("127.0.0.1", "tools", "hN5YxEpzG9tzo4m", "tools");

//date_default_timezone_set('Europe/Rome');

require '_config.php';
require '_comandi.php';

include 'inline.php';

$file = "input.json";
$f2 = fopen($file, 'w');
fwrite($f2, $content);
fclose($f2);



?>