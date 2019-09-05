<?php
echo("Inline by Deloo");

if (isset($update["inline_query"]))
{
$inline = $update["inline_query"]["id"];
$msg = $update["inline_query"]["query"];
$userID = $update["inline_query"]["from"]["id"];
$username = $update["inline_query"]["from"]["username"];
$name = $update["inline_query"]["from"]["first_name"];

function qm($message, $results = []) {
	global $api;
	global $userID;
	global $inline;
	if (!$message or strlen($message)<1)
		return false;
	$args = array(
		'inline_query_id' 	  => $inline,
		'cache_time'		  => 5,
		'is_personal'		  => true,
		'switch_pm_text'      => $message,
		'switch_pm_parameter' => 'AVVIO_CRAFT'
	);
	if (count($results) > 0) {
		$json = [];
		foreach ($results as $result) {
			if (is_array($result)) {
				$json[] = array(
					'type' => 'article',
					'id' => $userID."0000000".count($json),
					'title' => $result[0],
					'description' => $result[1],
					'input_message_content' => array('message_text' => $result[0], 'parse_mode' => 'HTML')
				);
			} else if (is_string($result)) {
				$json[] = array(
					'type' => 'article',
					'id' => $userID."0000000".count($json),
					'title' => $result,
					'input_message_content' => array('message_text' => $result, 'parse_mode' => 'HTML')
				);
			}
		}
		$args['results'] = json_encode($json);
	}
	$r = new HttpRequest("post", "https://api.telegram.org/$api/answerInlineQuery", $args);
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
		return $ar['result'];
	}
}

function qr($result, $line, $desc = "Clicca qui per fare il prossimo", $buttonText = "Prossimo") {
	global $api;
	global $userID;
	global $inline;
	if (!$result or strlen($result)<1)
		return false;
	$json = array(
		array(
			'type' => 'article',
			'id' => $userID."00000".$line,
			'title' => $result,
			'description' => $desc,
			'input_message_content' => array('message_text' => $result, 'parse_mode' => 'HTML'),
			'reply_markup' => array('inline_keyboard' => array(array(array('text' => $buttonText, 'switch_inline_query_current_chat' => "+".$line.":".rand()))) )
		)
	);

	$json = json_encode($json);
	$args = array(
		'inline_query_id' 	  => $inline,
		'results' 			  => $json,
		'cache_time' 		  => 1,
		'is_personal'		  => true
	);
	$r = new HttpRequest("post", "https://api.telegram.org/$api/answerInlineQuery", $args);
	$rr = $r->getResponse();
	$ar = json_decode($rr, true);
	$ok = $ar["ok"]; //false
	$e403 = $ar["error_code"];
	if($e403 == "403")
	{
		return false;
	} else if($e403 == "400") {
		return false;
	} else if($e403) {
		return false;
	} else {
		return $ar['result'];
	}
}

$s = mysqli_query($mysqli, "SELECT * FROM $userbot WHERE userID=$userID");
if (mysqli_num_rows($s)===0) {
    mysqli_query($mysqli, "INSERT INTO $userbot (userID, username) VALUES ($userID, \"$username\")");
    $s = mysqli_query($mysqli, "SELECT * FROM $userbot WHERE userID=$userID");
}
$arr = mysqli_fetch_assoc($s);
$line_n = $arr['crafting_index'];
$fname = $arr['crafting_list'];
$queries = $arr['query_inviate'];
$queries++;
mysqli_query($mysqli, "UPDATE $userbot SET query_inviate=$queries WHERE userID=$userID");
if ($msg == "reset") {
	qm("Lista pulita.");
	mysqli_query($mysqli, "UPDATE $userbot SET crafting_index=0,crafting_list=\"\" WHERE userID=$userID");
}
else if (!$fname or $fname == "") {
	$dir = 'Lists/';
	$item = $msg;
	$text= craft_list($item);
	if (!$text or $text == "")
		qm("Non stai seguendo nessuna lista.");
	else {
		$item = preg_replace("/\s/", "_", $item);
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
		mysqli_query($mysqli, "UPDATE $userbot SET crafting_index=0,crafting_list=\"$fname\" WHERE userID=$userID");
		
		
		$file = file($fname);
		if ($line_n >= count($file)) {
			qm("Finito. Clicca qui per tornare a tools, altrimenti chiudi la query.", ["Torna al menu"]);
			mysqli_query($mysqli, "UPDATE $userbot SET crafting_index=0,crafting_list=\"\" WHERE userID=$userID");
		}
		else {
			$next_c = $file[$line_n];
			$after_c = $line_n+1 >= count($file) ? false : $file[$line_n+1];
			if ($line_n == count($file) - 1)
			    qr($next_c, $line_n, "Clicca qui per fare il prossimo, riga: ".($line_n+1)." di ".count($file), "Concludi");	
			else
			    qr($next_c, $line_n, "Clicca qui per fare il prossimo, riga: ".($line_n+1)." di ".count($file), $after_c !== false ? $after_c : "Quasi finito...");	
		}
		unset($file);
	}
}
else if (!file_exists($fname)) {
	qm("Mi spiace, ma la lista che seguivi non esiste più.");
	mysqli_query($mysqli, "UPDATE $userbot SET crafting_index=0,crafting_list=\"\" WHERE userID=$userID");
}
else {
	if (strpos($msg, "+")===0) {
		if (strpos($msg, ":")!==false) {
			$line_check = (int) filter_var(substr($msg, 1, strpos($msg, ":")-1), FILTER_SANITIZE_NUMBER_INT);
			if ($line_check >= 0 and $line_check != $line_n and $line_check<PHP_INT_MAX-2) {
				$line_n = $line_check +1;
			}
			else
				$line_n++;
		}
		else
			$line_n++;
		mysqli_query($mysqli,"UPDATE $userbot SET crafting_index=$line_n WHERE userID=$userID");
	} else if (strpos($msg, "-")===0) {
		$line_n--;
		if ($line_n<1) $line_n=1;
		mysqli_query($mysqli,"UPDATE $userbot SET crafting_index=$line_n WHERE userID=$userID");
	}
	$file = file($fname);
	if ($line_n >= count($file)) {
			qm("Finito. Clicca qui per tornare a tools, altrimenti chiudi la query.", [["Torna al menu", "Clicca per tornare al menu"], ["Contrabbandiere", "Clicca per il contrabbandiere"], ["Torna al dungeon", "Clicca per il dungeon"]]);
			mysqli_query($mysqli, "UPDATE $userbot SET crafting_index=0,crafting_list=\"\" WHERE userID=$userID");
    }
	else {
			$next_c = $file[$line_n];
			$after_c = $line_n+1 >= count($file) ? false : substr($file[$line_n+1], 0, 15)."...";
			if ($line_n == count($file) - 1)
			    qr($next_c, $line_n, "Clicca qui per fare il prossimo, riga: ".($line_n+1)." di ".count($file), "Concludi");	
			else
			    qr($next_c, $line_n, "Clicca qui per fare il prossimo, riga: ".($line_n+1)." di ".count($file), $after_c !== false ? $after_c : "Quasi finito...");		
	}
	unset($file);
}

}



