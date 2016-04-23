<?php

// require 'config.php';

/**
Get List of devices
**/
$page = 1;

$getList = $smsGateway->getDevices($page);

$json_success = json_encode($getList['response']['success']);
$json_total_devices = json_encode($getList['response']['result']['total']);
$json_devices_id = json_encode($getList['response']['result']['data'][0]['id']);
$json_result = json_encode($getList['response']['result']['data']);
$json_result_data = json_decode($json_result);

if ($json_success == "true") {
	foreach ($json_result_data as $devices) {
		echo '<option value="' . $devices->id . '">' . $devices->number . '</option>';
	}
} else {
	echo "Could not retrieve data.";
}


// echo $json_result;
?>