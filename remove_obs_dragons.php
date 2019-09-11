<?php

function ___myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}

function ___richiestaAPI($url)
{
		$url = ___myUrlEncode($url);
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

		$stream = file_get_contents("lootplayers.json");
    	if ($stream==false) {
    		$giocatori = ___richiestaAPI("https://fenixweb.net:6600/api/v2/$token/players");
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
    		$giocatori = ___richiestaAPI("https://fenixweb.net:6600/api/v2/$token/players");
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
        	array_walk($arr, function (&$item) {
        		$item = strtolower($item['nickname']);
        	});
        	sort($arr, SORT_STRING);
			mysql_select_db('my_deluserver');
			$q = mysql_query("SELECT * FROM dragons");
			if (!$q or mysql_num_rows($q) == 0) {
				echo("SQL error: ".mysql_error($q));
			} else {
				while ($b = mysql_fetch_assoc($q)) {
    				if (!___check_name($b['nickname'])) {
  			      		echo $b['nickname']." non esiste. Lo cancello.<br/>\n";
   			         	mysql_query("DELETE FROM dragons WHERE nickname=\"".$b['nickname']."\"");
  			      	} else echo $b['nickname']." esiste. Non lo cancello.<br/>\n";
   			 	}
			}
		}

function ___fast_in_array($elem, $array) 
{
   $top = sizeof($array) -1;
   $bot = 0;
   while($top >= $bot) 
   {
      $p = floor(($top + $bot) / 2);
      if ($array[$p] < $elem) $bot = $p + 1;
      elseif ($array[$p] > $elem) $top = $p - 1;
      else return TRUE;
   }
   return FALSE;
}

function ___check_name($name)
{
	global $arr;
	$token = 'token';
	if ($name) $name = preg_replace("/[^\w_]/", "", trim($name));
    if ((!$name) or strlen($name) < 1)
    	return false;
    else {
    	return ___fast_in_array(strtolower($name), $arr);
    }
}