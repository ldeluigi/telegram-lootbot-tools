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
$mysqli = mysqli_connect("DB_HOST", "DB_USER", "DB_PWD", "DB_NAME"); // Inserire il nome del database del bot
$token = 'LOOT_API_TOKEN'; // Inserire il token delle API di loot bot
$items = richiesta_API("http://fenixweb.net:3300/api/v2/$token/items");
$dec = json_decode($items, true);
if (!is_array($dec)) return;
$arr = $dec["res"];
if ($dec["code"] == 200 and $arr[0]["id"]) {
	foreach ($arr as $i) {
        $itemID = $i['id'];
        $n = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM items WHERE id=$itemID"));
		if ($n>0) $check = mysqli_query($mysqli, "UPDATE items SET name=\"".$i['name']."\",rarity=\"".$i['rarity']."\",description=\"".$i['description']."\",value=".$i['value'].",estimate=".$i['estimate'].",craftable=".$i['craftable'].",reborn=".$i['reborn'].",power=".$i['power'].",power_armor=".$i['power_armor'].",power_shield=".$i['power_shield'].",dragon_power=".$i['dragon_power'].",critical=".$i['critical'].",allow_sell=".$i['allow_sell'].",craft_pnt=".$i['craft_pnt']." WHERE id=$itemID");
    	else {$check = mysqli_query($mysqli, "INSERT INTO items (`id`, `name`, `rarity`, `description`, `value`, `estimate`, `craftable`, `reborn`, `power`, `power_armor`, `power_shield`, `dragon_power`, `critical`, `allow_sell`, `craft_pnt`) VALUES ($itemID,\"".$i['name']."\",\"".$i['rarity']."\",\"".$i['description']."\",".$i['value'].",".$i['estimate'].",".$i['craftable'].",".$i['reborn'].",".$i['power'].",".$i['power_armor'].",".$i['power_shield'].",".$i['dragon_power'].",".$i['critical'].",".$i['allow_sell'].",".$i['craft_pnt'].")");
        echo("Nuovo item: ".$i["name"]);}
        var_dump($check);
        if (!$check) echo(mysqli_error($mysqli));
    }
}

$items = richiesta_API("http://fenixweb.net:3300/api/v2/$token/crafts/id");
$dec = json_decode($items, true);
if (!is_array($dec)) return;
$arr = $dec["res"];
if ($dec["code"] == 200 and $arr[0]["id"]) {
	foreach ($arr as $i) {
        $itemID = $i['material_result'];
        $check = mysqli_query($mysqli, "UPDATE items SET material_1=".$i['material_1'].",material_2=".$i['material_2'].",material_3=".$i['material_3']." WHERE id=$itemID");
        if (!$check) echo(mysqli_error($mysqli));
    }
}