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
$mysqli = mysqli_connect("DB_HOST", "DB_USER", "DB_PWD", "DB_NAME");
$token = 'LOOT_API_TOKEN'; // your token
$global = richiesta_API("https://fenixweb.net:6600/api/v2/$token/info");
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
	$s = mysqli_query($mysqli, "INSERT INTO global (year, month, global_tot, global_cap, global_members, global_on) VALUES ($year, $month, $global_tot, $global_cap, $global_members, $global_on)");
	echo mysqli_error($mysqli);
} else {
	echo("Error in: ".$global);
}