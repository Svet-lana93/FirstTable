<?php
function dump($arg) 
{
	return '<pre>' . print_r($arg, true) . '<pre>';
}
echo dump($_GET);
echo '<br>';
echo dump($_POST);

$f = fopen('new_file.txt', 'w');
foreach ($_POST as $key => $value) {
	if (is_array($value)) {
		$value = implode(', ', $value);
	}
	$textForPrint = $key . ' = ' . $value;
	echo $textForPrint . '<br>';
	fwrite($f, $textForPrint . PHP_EOL);	
}
fclose($f);