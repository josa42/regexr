<?php
$regex = $_POST['regex'] ?: '/.*/';
$text = $_POST['text'] ?: 'Lorem Ipsum';
$func = $_POST['func'];

if($regex && $text) {
	$matches = '';

	switch ($func) {
		case 'preg_match':
			@preg_match($regex, $text, $matches);
			break;
		case 'preg_match_all':
			@preg_match_all($regex, $text, $matches);
			break;
		case 'preg_split':
			$matches = @preg_split($regex, $text);
			break;
	}

	echo '<pre>' . print_r($matches, true) . '</pre>';
}
