<?php
if (!function_exists("richiesta_API")) {
function richiesta_API($url)
{
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 0);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
 
        return $result;
}
}
mysql_select_db("my_db"); // your db
$token = 'token'; // your token
$global = richiesta_API("https://whigo.it/edoporting/api/v2/$token/info");
echo $global;
$dec = json_decode($global, true);
if (!is_array($dec)) return;
$arr = $dec["res"][0];
echo " - json ok";
if ($dec["code"] == 200 and $arr["global_tot"]) {
	echo " - return value ok, values ok";
	$month = date("n");
	$year = date("Y");
	$global_tot = $arr["global_tot"];
	$global_cap = $arr["global_cap"];
	$global_on = $arr["global_on"];
	$global_members = $arr["global_members"];
	$s = mysql_query("INSERT INTO global (year, month, global_tot, global_cap, global_members, global_on) VALUES ($year, $month, $global_tot, $global_cap, $global_members, $global_on)");
	echo mysql_error($s);
} else {
	echo("Error in: ".$global);
}