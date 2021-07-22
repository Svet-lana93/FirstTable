<?php
$firstName = trim($_POST['first_name'] ?? null);
$message = trim($_POST['message'] ?? null);
$filePath = 'SavedMessages.txt';

function saveMessage($filePath, $firstName, $message)
{
	$handler = fopen($filePath, 'a');
	$date = date('Y-m-d H:i:s');
	$saveMessage = [
		'first_name' => $firstName,
		'message' => $message,
		'date' => $date
	];
	
	fwrite($handler, json_encode($saveMessage) . PHP_EOL);

	fclose($handler);
	
	return $saveMessage;
}	

if(!empty($firstName) && !empty($message)) {
	saveMessage($filePath, $firstName, $message);
}
header('Location:/');