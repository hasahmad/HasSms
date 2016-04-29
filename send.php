<?php
require '.config/config.php';



if(isset($_POST['submit'])){
	$deviceID = $_POST['from'];
	$numbers = str_replace(' ', '', $_POST['dest']);
	$message = $_POST['message'];
	if (strpos($numbers, ',') !== false) {
		$numbers=explode(",",$numbers);
	}
	$result = $smsGateway->sendMessageToManyNumbers($numbers, $message, $deviceID);

	$json_msg = json_encode($result);
	echo '<pre>' . $json_msg . '</pre>';
	// echo count($numbers);
	// echo count($_POST['dest']);
}

// $deviceID = 16328;
// $numbers = '+16477831190';
// $message = 'OYEEEEEE!';

// $options = [
// 'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
// ];

//Please note options is no required and can be left out
// $result = $smsGateway->sendMessageToManyNumbers($numbers, $message, $deviceID, $options);

?>