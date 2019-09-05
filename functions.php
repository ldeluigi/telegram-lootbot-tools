<?php

if($config['funziona_nei_canali'])
{
if($update["channel_post"])
{
$update["message"] = $update["channel_post"];
$canale = true;
}
}

if($config['funziona_messaggi_modificati'])
{
if($update["edited_message"])
{
$update["message"] = $update["edited_message"];
$editato = true;
if ($update["edited_message"]["game"])
{
$game = $update["edited_message"]["game"];
$game_title = $game["title"];
$game_description = $game["description"];
$game_rank = $game["text"];
}
}
}

if($config['funziona_messaggi_modificati_canali'])
{
if($update["edited_channel_post"])
{
$update["message"] = $update["edited_channel_post"];
$editato = true;
$canale = true;
}
}
$idmsg = $update["message"]["message_id"];
$chatID = $update["message"]["chat"]["id"];
$userID = $update["message"]["from"]["id"];
$msg = $update["message"]["text"];
$username = $update["message"]["from"]["username"];
$nome = $update["message"]["from"]["first_name"];
$cognome = $update["message"]["from"]["last_name"];
if($chatID<0)
{
$titolo = $update["message"]["chat"]["title"];
$usernamechat = $update["message"]["chat"]["username"];
}
$entities = $update["message"]["entities"];
$voice = $update["message"]["voice"]["file_id"];
$photo = $update["message"]["photo"][0]["file_id"];
$document = $update["message"]["document"]["file_id"];
$document_name = $update["message"]["document"]["file_name"];
$audio = $update["message"]["audio"]["file_id"];
$sticker = $update["message"]["sticker"]["file_id"];
$gioco = $update["message"]["game"];//[title] o [description]
$inoltrato = false;
if ($update["message"]["forward_from"]["id"])
{
$inoltrato = true;
$inoltrato_id = $update["message"]["forward_from"]["id"];
$inoltrato_nome = $update["message"]["forward_from"]["first_name"];
$inoltrato_username = $update["message"]["forward_from"]["username"];
$inoltrato_time = $update["message"]["forward_date"];
}
$risposta = false;
if ($update["message"]["reply_to_message"]["message_id"]) {
	$risposta = true;
    $risposta_idmsg = $update["message"]["reply_to_message"]["message_id"];
    $risposta_userID = $update["message"]["reply_to_message"]["from"]["id"];
    $risposta_date = $update["message"]["reply_to_message"]["date"];
    $risposta_msg = $update["message"]["reply_to_message"]["text"];
    $risposta_entities = $update["message"]["reply_to_message"]["entities"];
}

//tastiere inline
if($update["callback_query"])
{
$cbid = $update["callback_query"]["id"];
$cbdata = $update["callback_query"]["data"];
$msg = $cbdata;
$cbmid = $update["callback_query"]["message"]["message_id"];
$cbmtext = $update["callback_query"]["message"]["text"];
$chatID = $update["callback_query"]["message"]["chat"]["id"];
$userID = $update["callback_query"]["from"]["id"];
$nome = $update["callback_query"]["from"]["first_name"];
$cognome = $update["callback_query"]["from"]["last_name"];
$username = $update["callback_query"]["from"]["username"];
$titolo = $update["callback_query"]["message"]["chat"]["title"];
$entities = $update["callback_query"]["message"]["entities"];
}


$token = 'h4KMUhwMuW9hLKEQ15283';
$menu[] = array(
    	array(
			"text" => "🎒",
			"callback_data" => "set_zaino_default"
		),
		array(
			"text" => "-10%",
			"callback_data" => "set_zaino_-10"
		),
        array(
			"text" => "-1%",
			"callback_data" => "set_zaino_-1"
		),
        array(
			"text" => "+1%",
			"callback_data" => "set_zaino_+1"
		),
        array(
			"text" => "+10%",
			"callback_data" => "set_zaino_+10"
		)
    );
$menu[] = array(
   		array(
			"text" => "🔍",
			"callback_data" => "set_ricerca_default"
		),
		array(
			"text" => "-10%",
			"callback_data" => "set_ricerca_-10"
		),
        array(
			"text" => "-1%",
			"callback_data" => "set_ricerca_-1"
		),
        array(
			"text" => "+1%",
			"callback_data" => "set_ricerca_+1"
		),
        array(
			"text" => "+10%",
			"callback_data" => "set_ricerca_+10"
		)
	);
$menu[] = array(
   		array(
			"text" => "💸 Tutto a base",
			"callback_data" => "set_escludi_BASE"
		),
		array(
			"text" => "🚫 Niente a base",
			"callback_data" => "set_escludi_ON"
		)
    );
$menu[] = array(
   		array(
			"text" => "💰 Prezzo scrigni",
			"callback_data" => "set_escludi_CHEST"
		),
        array(
			"text" => "⚠️ Nessun controllo",
			"callback_data" => "set_escludi_OFF"
		)
    );
$menu[] = array(
   		array(
			"text" => "📊",
			"callback_data" => "set_sellmax_default"
		),
		array(
			"text" => "-100",
			"callback_data" => "set_sellmax_-100"
		),
        array(
			"text" => "-10",
			"callback_data" => "set_sellmax_-10"
		),
		array(
			"text" => "-1",
			"callback_data" => "set_sellmax_-1"
		),array(
			"text" => "+1",
			"callback_data" => "set_sellmax_+1"
		),
        array(
			"text" => "+10",
			"callback_data" => "set_sellmax_+10"
		),
		array(
			"text" => "+100",
			"callback_data" => "set_sellmax_+100"
		)
	);
$menu[] = array(
		array(
			"text" => "👥Pubblici",
			"callback_data" => "set_pubblici_ON"
		),
        array(
			"text" => "👤Privati",
			"callback_data" => "set_pubblici_OFF"
		)
    );
$menu[] = array(
		array(
			"text" => "🗳",
			"callback_data" => "set_massivo_ON"
		),
		array(
			"text" => "Si",
			"callback_data" => "set_massivo_ON"
		),
        array(
			"text" => "No",
			"callback_data" => "set_massivo_OFF"
		)
    );
$menu[] = array(
		array(
			"text" => "Emoji",
			"callback_data" => "set_emoji_ON"
		),
		array(
			"text" => "✅",
			"callback_data" => "set_emoji_ON"
		),
        array(
			"text" => "❌",
			"callback_data" => "set_emoji_OFF"
		)
    );



function sm($chatID, $text, $rmf = false, $pm = 'pred', $dis = false, $replyto = false, $inline = 'pred')
{
global $api;
global $userID;
global $update;
global $config;
global $msg;

if($pm=='pred') $pm = $config["formattazione_predefinita"];

if($inline=='pred')
{
if($config["tastiera_predefinita"] == "inline") $inline = true;
elseif($config["tastiera_predefinita"] == "normale")
$inline = false;
}
if($rmf == "nascondi") $inline = false;


$dal = $config["nascondi_anteprima_link"];

if(!$inline)
{
	if($rmf == 'nascondi')
	{
		$rm = array('hide_keyboard' => true
		);
	}else{
		$rm = array('keyboard' => $rmf,
		'resize_keyboard' => true
		);
		if ($replyto) {
			$rm['selective'] = true;
		}
	}
}else{
	$rm = array('inline_keyboard' => $rmf,
	);
}
$rm = json_encode($rm);

$args = array(
'chat_id' => $chatID,
'text' => $text,
'disable_notification' => $dis,
'parse_mode' => $pm
);
if($dal) $args['disable_web_page_preview'] = $dal;
if($replyto) $args['reply_to_message_id'] = $replyto;
if($rmf) $args['reply_markup'] = $rm;
if($text)
{
$r = new HttpRequest("post", "https://api.telegram.org/$api/sendmessage", $args);
$rr = $r->getResponse();
$ar = json_decode($rr, true);
$ok = $ar["ok"]; //false
$e403 = $ar["error_code"];
if ($ar["error_code"] == 429 or $ar["error_code"] == "429" and strpos($msg, "Telegram ha imposto ")!==0) {
	sm($chatID, "Telegram ha imposto un antiflood alla tua richiesta, mi spiace.\nRiprova tra ".($ar["parameters"]["retry_after"] ? $ar["parameters"]["retry_after"] : "circa 300")." secondi.");
}
if($e403 == "403" and $chatID != 340271798)
{
	sm(340271798, $rr);
return false;
}elseif($e403 and $chatID != 340271798){
	$e = new \Exception;
	sm(340271798, substr($msg."\n\n".$rr."\n\n".print_r($e->getTraceAsString(), true), 0, 4000));
return false;
}else{
return $ar['result']['message_id'];
}
}
}


function cb_reply($id, $text, $alert = false, $cbmid = false, $ntext = false, $nmenu = false, $npm = "pred")
{
global $api;
global $chatID;
global $config;

if($npm == 'pred') $npm = $config["formattazione_predefinita"];



$args = array(
'callback_query_id' => $id,
'text' => $text,
'show_alert' => $alert

);
$r = new HttpRequest("get", "https://api.telegram.org/$api/answerCallbackQuery", $args);

if($cbmid)
{
if($nmenu)
{
$rm = array('inline_keyboard' => $nmenu);
$rm = json_encode($rm);

}

if ($ntext) {
$args = array(
'chat_id' => $chatID,
'message_id' => $cbmid,
'text' => $ntext,
'parse_mode' => $npm,
);
if($nmenu) $args["reply_markup"] = $rm;
$r = new HttpRequest("post", "https://api.telegram.org/$api/editMessageText", $args);
}
else if ($nmenu == true) {
$args = array(
'chat_id' => $chatID,
'message_id' => $cbmid,
);
//if($rm) $args["reply_markup"] = $rm;
$r = new HttpRequest("post", "https://api.telegram.org/$api/editMessageReplyMarkup", $args);
}

}
}


function leave() {
global $api;
global $chatID;
$args = array(
'chat_id' => $chatID
);
$r = new HttpRequest("post", "https://api.telegram.org/$api/leaveChat", $args);
$rr = $r->getResponse();
$ar = json_decode($rr, true);
$ok = $ar["ok"]; //false
$e403 = $ar["error_code"];
if($e403 == "403")
{
return false;
}elseif($e403){
return false;
}else{
return true;
}

}

function typing()
{
global $api;
global $chatID;
$args = array(
'chat_id' => $chatID,
'action' => 'typing',
);
$r = new HttpRequest("post", "https://api.telegram.org/$api/sendChatAction", $args);
$rr = $r->getResponse();
return $rr['ok'];
}

function upload_photo()
{
global $api;
global $chatID;
$args = array(
'chat_id' => $chatID,
'action' => 'upload_photo',
);
$r = new HttpRequest("post", "https://api.telegram.org/$api/sendChatAction", $args);
$rr = $r->getResponse();
return $rr['ok'];
}

function upload_document()
{
global $api;
global $chatID;
$args = array(
'chat_id' => $chatID,
'action' => 'upload_document',
);
$r = new HttpRequest("post", "https://api.telegram.org/$api/sendChatAction", $args);
$rr = $r->getResponse();
return $rr['ok'];
}

function upload_video()
{
global $api;
global $chatID;
$args = array(
'chat_id' => $chatID,
'action' => 'upload_video',
);
$r = new HttpRequest("post", "https://api.telegram.org/$api/sendChatAction", $args);
$rr = $r->getResponse();
return $rr['ok'];
}

function memberstatus($chatID, $memberID)
{
global $api;
$args = array(
'chat_id' => $chatID,
'user_id' => $memberID
);
$r = new HttpRequest("get", "https://api.telegram.org/$api/getChatMember", $args);
$rr = $r->getResponse();
$ar = json_decode($rr, true);
$success = $ar["ok"];
$status = $ar["result"]["status"];
if ($success == true)
	return $status;
else
	return false;
}





function editm($chatID, $messID, $testo, $pm = 'pred')
{
global $api;
global $userID;
global $config;
if($pm=='pred') $pm = $config["formattazione_predefinita"];


$args = array(
'chat_id' => $chatID,
'message_id' => $messID,
'text' => $testo,
'parse_mode' => $pm
);
if($testo)
{
$r = new HttpRequest("post", "https://api.telegram.org/$api/editMessageText", $args);
$rr = $r->getResponse();
$ar = json_decode($rr, true);
$returned = $ar['ok'];
if ($returned)
	return $returned;
else
	return "false";
}
}


function delm($chatID, $messID)
{
global $api;
global $userID;
$args = array(
'chat_id' => $chatID,
'message_id' => $messID,
);
$r = new HttpRequest("post", "https://api.telegram.org/$api/deleteMessage", $args);
$rr = $r->getResponse();
return $rr['ok'];
}



function spng($chat_id, $nome, $replyto = false, $caption = false, $rm = false)
{
global $api;
define('BOTAPI','https://api.telegram.org/'.$api.'/');
if (strpos($nome, ".png") !== false and strpos($nome, ".png") != strlen($nome)-4)
	return false;

	$cfile = new CURLFile($nome, 'image/png');
    $data = [
        'chat_id' => $chat_id , 
        'photo' => $cfile
        ];
	if ($replyto) $data['reply_to_message_id'] = $replyto;
	if ($caption) $data['caption'] = $caption;
    if ($rm) $data['reply_markup'] = json_encode(array( 'inline_keyboard' => $rm ));
    $ch = curl_init(BOTAPI.'sendPhoto');
    if ($ch===false) return array(false, 'Unable to set URL', curl_getinfo($ch));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: multipart/form-data"
	));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    if ($result) $error = 'none'; else $error = curl_error($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return array($result, $error, $info);
}



function sv($chatID, $fileID, $rmf = false, $replyto = false, $inline = 'pred')
{
global $api;
global $userID;
global $update;
global $config;

if($inline=='pred')
{
if($config["tastiera_predefinita"] == "inline") $inline = true;
elseif($config["tastiera_predefinita"] == "normale")
$inline = false;
}
if($rmf == "nascondi") $inline = false;

if(!$inline)
{
	if($rmf == 'nascondi')
	{
		$rm = array('hide_keyboard' => true
		);
	}else{
		$rm = array('keyboard' => $rmf,
		'resize_keyboard' => true
		);
		if ($replyto) {
			$rm['selective'] = true;
		}
	}
}else{
	$rm = array('inline_keyboard' => $rmf,
	);
}
$rm = json_encode($rm);

$args = array(
'chat_id' => $chatID,
'video' => $fileID,
);
if($replyto) $args['reply_to_message_id'] = $replyto;
if($rmf) $args['reply_markup'] = $rm;
if($fileID)
{
$r = new HttpRequest("post", "https://api.telegram.org/$api/sendVideo", $args);
$rr = $r->getResponse();
$ar = json_decode($rr, true);
$ok = $ar["ok"]; //false
$e403 = $ar["error_code"];
if($e403 == "403")
{
return false;
}elseif($e403){
return false;
}else{
return $ar['result']['message_id'];
}
}
}

function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}

function richiestaAPI($url)
{
		$url = myUrlEncode($url);
		set_time_limit(0);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 0);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0); 
		curl_setopt($curl, CURLOPT_TIMEOUT, 400);
        $result = curl_exec($curl);
        curl_close($curl);
 
        return $result;
}

function getRarity($item) {
	global $mysqli;
    if (mb_strpos($item, " (")!==false) {
        $item = mb_substr($item, 0, mb_strpos($item, " ("));
    }
	if (mb_strpos(strtolower($item), "pozione")!==false) {
        return "Pozioni";
    }
	$item_q = mysqli_query($mysqli,"SELECT * FROM items WHERE name=\"$item\"");
	while ($i = mysqli_fetch_assoc($item_q)) {
        if ($i['name'] == $item) {
			if ($i['craftable'] == 0)
				return ((string) $i["rarity"]);
			else return "Craftable";
        }
    }
    return "n/a (not found)";
}

function getPrice($item) {
	if (mb_strpos($item, " (")!==false) {
        $item = mb_substr($item, 0, mb_strpos($item, " ("));
    }
	global $mysqli;
	$item_q = mysqli_query($mysqli,"SELECT * FROM items WHERE name=\"$item\"");
	while ($i = mysqli_fetch_assoc($item_q)) {
        if ($i['name'] == $item) {
			return ((string) $i['value']);
        }
		$b = $i;
    }
    return "n/a (not found) ";
}

function getID($item) {
	if (mb_strpos($item, " (")!==false) {
        $item = mb_substr($item, 0, mb_strpos($item, " ("));
    }
	global $mysqli;
	$item_q = mysqli_query($mysqli, "SELECT * FROM items WHERE name=\"$item\"");
	while ($i = mysqli_fetch_assoc($item_q)) {
        if (strtolower($i['name']) == strtolower($item)) {
			return ((int) $i['id']);
        }
    }
    return "n/a (not found)";
}


function tableFormat($item) {
$i_tem = preg_replace("/ /", "_", $item);
$i_tem = preg_replace("/[^\w]/", "", $i_tem);
return $i_tem;
}

function searchStrings($r) {
	$r = strtoupper($r);
	global $chatID;
    global $userID;
    global $username;
	global $mysqli;
	$q = mysqli_query($mysqli,"SELECT * FROM items WHERE rarity=\"$r\" AND craftable=0 AND allow_sell=1");
	$n = mysqli_num_rows($q);
	if ($q and $n>0) {
		$arr = [];
		$rows = [];
		$counter = 0;
		while ($b = mysqli_fetch_assoc($q)) {
			$arr[$counter] = $b;
			$rows[$counter].= ($b['name']).",";
			$counter++;
		}
		sort($rows, SORT_STRING);
		$counter=0;
		$messages = [];
        foreach ($rows as $ro) {
            $messages[$counter/3].=$ro;
			$counter++;
        }
		$text = "";
		
		foreach ($messages as $m) {
			$text.= "/ricerca ".substr($m, 0, -1)."\n";
		}
		if (strlen($text) == 0) {
			sm($chatID, "Nessun item di tale rarità da cercare");
		} else {
			$item = "r__".preg_replace("/\s/", "_", $r);
			$dir = 'Lists/';
			foreach (scandir($dir) as $file) {
				if (strpos($file, ".txt") !== false and strlen($file) - strpos($file, ".txt") - 4 === 0 ) {
					$time = (int) explode("--", $file)[1];
					if (strpos($file,"_".strtolower($item)."--")===0 or $time < time() - 24 * 60 * 60) {
						unlink($dir.$file);
					}
				}
			}
			$fname = $dir."_".strtolower($item."--".time()."--.txt");
			file_put_contents($fname, $text);
			if (mysqli_query($mysqli,"UPDATE ToolsForLootBot SET crafting_index=0,crafting_list=\"$fname\" WHERE userID=$userID")) {
				sm($chatID, "Lista Ricerca $r caricata con successo.", array(array(array("text" => "Inizia", "switch_inline_query" => " "))));
			} else {
				sm($chatID, "Lista Ricerca $r non caricata con successo. Puoi segnalare il problema a @Delooo.");
			}
		}
	} else {
		sm($chatID, "Rarità non trovata");
	}
	return;
}

function getRoom($id, $emoji = false) {
	if ($id<0 and ((int) date("G")) < 8)
		$id -= 5;
	if ($emoji) {
		if  ($id<=-70) return "☠️";
		if  ($id<=-50) return "👺";
		if  ($id<=-30) return "👹";
		if  ($id<=-10) return "👾";
		if  ($id<0) return "🐗";
		switch ($id) {
			case 1: return "🐗";
			case 2: return "👵🏻";
			case 3: return "⚖️";//"🔛";
			case 4: return "🕳";
			case 5: return "🎚";
			case 6: return "🎲";
			case 7: return "🧙‍♂";//"👨🏻‍🌾";
			case 8: return "🗡";
			case 9: return "💰";
			case 10: return "🙇🏻";
			case 11: return "🐉";
			case 12: return "🎁";
			case 13: return "💥";
			case 14: return "☎️";
			case 15: return "⛲️";
			case 16: return "🧞‍♂";//"💫";
			case 17: return "⚡️";
			case 18: return "🔪";
			case 19: return "🀄️";//"💱";
			case 20: return "👨🏻‍🎤";
			case 21: return "🧘‍♂";//"💆🏻‍♂️";
			case 22: return "🕸";
			case 23: return "🚪";
			case 24: return "🖼";
			case 25: return "⚙️";
			case 26: return "⁉️";
			case 27: return "👳‍♂";
			case 28: return "🍷";
			case 29: return "💣";
			case 30: return "🛢";
			case 31: return "💎";
			case 32: return "🏜";
			case 33: return "🔮";
			case 34: return "☁️";
            case 35: return "⏳";
            case 36: return "🧗‍♂";
            case 37: return "🌪️";
			case 38: return "⛔️";
			case 39: return "🧱";
			default: return "❔";
		}
	}
	else {
		if ($id<0) return "mostro (".((string) abs($id)).")";
		switch ($id) {
			case 1: return "mostro";
			case 2: return "anziana";
			case 3: return "divisa";
			case 4: return "pozzo";
			case 5: return "leve";
			case 6: return "marinaio";
			case 7: return "viandante";
			case 8: return "spada";
			case 9: return "mucchietto";
			case 10: return "aiuto";
			case 11: return "drago";
			case 12: return "scrigno";
			case 13: return "trappola";
			case 14: return "pulsantiera";
			case 15: return "fontana";
			case 16: return "desiderio";
			case 17: return "fessura";
			case 18: return "ascia";
			case 19: return "incisioni";
			case 20: return "predone";
			case 21: return "meditazione";
			case 22: return "vuota";
			case 23: return "porte";
			case 24: return "specchio";
			case 25: return "marchingegno";
			case 26: return "scambiata";
			case 27: return "veggente";
			case 28: return "bevanda";
			case 29: return "bombarolo";
			case 30: return "esplosivi";
			case 31: return "gioielliere";
			case 32: return "parco";
			case 33: return "energia";
			case 34: return "trasparente";
            case 35: return "maledizione";
            case 36: return "crepaccio";
            case 37: return "polvere";
			case 38: return "vicolo";
			case 39: return "walltrap";
			default: return "?";
		}
	}
}

function getColorOfRoom($id) {
	if ($id<0) return "#6E381E";
	switch ($id) {
		case 1: return "#6E381E";
		case 2: return "#CCCCCC";
		case 3: return "#8b6914";
		case 4: return "#1a1a1a";
		case 5: return "#bebebe";
		case 6: return "#a2b5cd";
		case 7: return "#ffffe0";
		case 8: return "#999999";
		case 9: return "#eeee00";
		case 10: return "#ee82ee";
		case 11: return "#32cd32";
		case 12: return "#8b5742";
		case 13: return "#8b2500";
		case 14: return "#ff4500";
		case 15: return "#436eee";
		case 16: return "#ffff00";
		case 17: return "#cdcdc1";
		case 18: return "#878787";
		case 19: return "#e6e6fa";
		case 20: return "#f08080";
		case 21: return "#faebd7";
		case 22: return "#030303";
		case 23: return "#8b795e";
		case 24: return "#fffaf0";
		case 25: return "#333333";
		case 26: return "#b22222";
		case 27: return "#e9967a";
		case 28: return "#ff1493";
		case 29: return "#950000";
		case 30: return "#953b00";
		case 31: return "#51cae7";
		case 32: return "#e6b120";
		case 33: return "#a226fe";
		case 34: return "#ffffff";
        case 35: return "#110000";
        case 36: return "#d8c68f";
        case 37: return "#bbbbbb";
		case 38: return "#202021";
		case 39: return "#7a5353";
		default: return "#eeeeee";
	}
}

function lootItems() {
	global $token;
	global $mysqli;
	$q = mysqli_query($mysqli,"SELECT UNIX_TIMESTAMP(time_ins) FROM items WHERE 1 LIMIT 1");
	if (mysqli_num_rows($q) == 0 or (mysqli_fetch_row($q)[0] < (time() - 60*60*12))) {
		include "update_items.php";
	}
	$q = mysqli_query($mysqli,"SELECT * FROM items WHERE 1");
	$lista = [];
	while ($b = mysqli_fetch_assoc($q)) {
		$lista[] = $b;
	}
	return $lista;
}

function getFile($fileID) {
global $api;
if (is_string($fileID)) {
	$args = array(
    	'file_id' => $fileID
	);
    $r = new HttpRequest("get", "https://api.telegram.org/$api/getFile", $args);
	$rr = $r->getResponse();
	$ar = json_decode($rr, true);
	if ($ar['ok']) return "https://api.telegram.org/file/$api/".$ar['result']['file_path'];
    else return false;
}
else return 'Wrong argument';
}

function getMateriali($itemID) {
	if (!$itemID or $itemID<0)
		return false;
	if ($itemID == 0)
		return false;
	global $mysqli;
	$q = mysqli_query($mysqli,"SELECT * FROM items WHERE id=$itemID");
	$n = mysqli_num_rows($q);
	if ($n<1)
		return false;
	$s = mysqli_fetch_assoc($q);
	if ($s['craftable'] == 0) return array();
	return array($s['material_1'],$s['material_2'],$s['material_3']);
}

function getName($itemID) {
	if (!$itemID or $itemID<0)
		return false;
	if ($itemID == 0)
		return false;
	global $mysqli;
	$q = mysqli_query($mysqli,"SELECT * FROM items WHERE id=$itemID");
	$n = mysqli_num_rows($q);
	if ($n<1)
		return false;
	$s = mysqli_fetch_assoc($q);
	return $s['name'];
}

function craft_list_id($itemID, $n_item) {
	if (!$itemID or $itemID<0)
		return false;
	if ($itemID == 0)
		return false;
	$materiali = array();
	for($i=0;$i<$n_item;$i++)
	{
		$tempmat = getMateriali($itemID);
		if(is_array($tempmat))
			$materiali = array_merge($materiali, $tempmat);
			//foreach($tempmat as $mat)
			//	$materiali[] = $mat;
	}
	if (count($materiali) == 0)
		return "";
	foreach ($materiali as $matID) {
		$temp_l = craft_list_id($matID, 1);
		if ($temp_l and strlen($temp_l)>0) $mat_list[] = $temp_l;
	}
	$rettxt = (count($mat_list)>0 ? implode("\n", $mat_list)."\n" : "");
	for($i=0;$i<$n_item;$i++)
		$rettxt .= getName($itemID)."\n";
	return substr($rettxt,0,strlen($rettxt)-1);
}

function mat_list_id_id($itemID) {
	if (!$itemID or $itemID<0)
		return false;
	if ($itemID == 0)
		return false;
	$materiali = getMateriali($itemID);
	if (count($materiali) == 0)
		return "$itemID";
	foreach ($materiali as $matID) {
		$temp_l = mat_list_id_id($matID);
		if ($temp_l and strlen($temp_l)>0) $mat_list[] = $temp_l;
	}
	return (count($mat_list)>0 ? implode("\n", $mat_list) : "$itemID");
}

function craft_list($item, $n_item=1) {
	if (!$item or strlen($item)<1)
		return false;
	$item = preg_replace("/[^\w\dàèìòù ']/", "", $item);
	$itemID = getID($item);
	if ($itemID == "n/a (not found)") {
		return false;
	}
	$cl = craft_list_id($itemID, $n_item);
	if (!$cl or $cl == "") {
		return "Cerca *$item";
	}
	$list_a = array_count_values(explode("\n", $cl));
	$text="";
	foreach ($list_a as $item_c => $times) {
		while ($times > 3) {
			$text.="Crea $item_c,3\n";
			$times-=3;
		};
		if ($times==1)
			$text.="Crea $item_c\n";
		else if ($times>0)
			$text.="Crea $item_c,$times\n";
	}
	return $text;
}

function craft_list_fast($IDlist) {
	if (!isset($IDlist) or count($IDlist)<1)
		return "rip";
	$cl = "";
	foreach ($IDlist as $itemID) {
		$cl .= craft_list_id($itemID);
		if (!$cl or $cl == "") {
			return "fuck";
		}
		$cl .= "\n";
	}
	$list_a = array_count_values(explode("\n", $cl));
	$text="";
	foreach ($list_a as $item_c => $times) {
		while ($times > 3) {
			$text.="Crea $item_c,3\n";
			$times-=3;
		};
		if ($times==1)
			$text.="Crea $item_c\n";
		else if ($times>0)
			$text.="Crea $item_c,$times\n";
	}
	return $text;
}

function craft_list_raw($item) {
	if (!$item or strlen($item)<1)
		return false;
	$item = preg_replace("/[^\w\dàèìòù ']/", "", $item);
	$itemID = getID($item);
	if ($itemID == "n/a (not found)") {
		return false;
	}
	$cl = craft_list_id($itemID);
	if (!$cl or $cl == "") {
		return "$item";
	}
	return $cl;
}

function endswith($string, $test) {
    $strlen = strlen($string);
    $testlen = strlen($test);
    if ($testlen > $strlen) return false;
    return substr_compare($string, $test, $strlen - $testlen, $testlen) === 0;
}

function linear_regression( $x, $y ) {
	reset($x);
    reset($y);
    for ($i = 0; $i < count($x) && $i < count($y) ; $i++) {
    	if (current($y) == 0) {
        	unset($y[key($y)]);
            unset($x[key($x)]);
        }
        next($y);
        next($x);
    }
 
    $n     = count($x);     // number of items in the array
    $x_sum = array_sum($x); // sum of all X values
    $y_sum = array_sum($y); // sum of all Y values
 
    $xx_sum = 0;
    $xy_sum = 0;
 
    for($i = 0; $i < $n; $i++) {
        $xy_sum += ( $x[$i]*$y[$i] );
        $xx_sum += ( $x[$i]*$x[$i] );
    }
 
    // Slope
    $slope = ( ( $n * $xy_sum ) - ( $x_sum * $y_sum ) ) / ( ( $n * $xx_sum ) - ( $x_sum * $x_sum ) );
 
    // calculate intercept
    $intercept = ( $y_sum - ( $slope * $x_sum ) ) / $n;
 
    return array( 
        'slope'     => $slope,
        'intercept' => $intercept,
    );
}

function check_name($name)
{
	global $token;
    global $chatID;
    global $adminID;
	if ($name) $name = preg_replace("/[^\w_]/", "", trim($name));
    if ((!$name) or strlen($name) < 1)
    	return false;
    else {
    	$stream = file_get_contents("lootplayers.json");
    	if ($stream==false) {
    		$giocatori = richiestaAPI("https://fenixweb.net:6600/api/v2/$token/players");
    		$nomefile = "lootplayers.json";
			$fptr = fopen($nomefile, 'w');
			fwrite($fptr, ((string) time())."@giocatori@".$giocatori);
			fclose($fptr);
        	$stream = file_get_contents("lootplayers.json");
    	}
   		$rawdata=explode("@giocatori@", $stream);
    	$last=(int) $rawdata[0];
   		$last = ((int) time())-$last;
    	if ($last>86400) {
    		$giocatori = richiestaAPI("https://fenixweb.net:6600/api/v2/$token/players");
    		$nomefile = "lootplayers.json";
			$fptr = fopen($nomefile, 'w');
			fwrite($fptr, ((string) time())."@giocatori@".$giocatori);
			fclose($fptr);
        	$stream = file_get_contents("lootplayers.json");
        	$rawdata=explode("@giocatori@", $stream);
    	}
    	$json = $rawdata[1];
    	$dec = json_decode($json, true);
    	$arr = $dec["res"];
    	if ($arr[0]["id"]) {
    		foreach ($arr as $p) {
				if (strtolower($p['nickname'])== strtolower($name)) {
                	return true;
				}
			}
        	return false;
   		}
    	else {
    	      sm($adminID, json_last_error_msg());
              sm($chatID, "Errore, impossibile comunicare con le api di Loot Bot.");
               
              exit(1);
          }
    }
}


function chestPrice($rarity)
{
	$prices = array(
		'C' => 1200,
		'NC' => 2400,
		'R' => 4800,
		'UR' => 7200,
		'L' => 14000,
		'E' => 30000
	);
	return $prices[$rarity] ? $prices[$rarity] : false;
}

function WriteLog($body, $line)
{
	return file_put_contents("error.log", "(".date("d/m/Y H:i:s")."): ".$body." [".$line."]\r\n-----------------\r\n\r\n",FILE_APPEND);
}