<?php
    if (!empty(trim($Directory))) {
		if (substr($Directory, -1) !== '/') {
			$Directory .= "/"; // Last "/" Character Check
		}
	}
	
	$Directory = '../' . $Directory; // Exit Repository
	
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	
	$uri .= $_SERVER['HTTP_HOST'];
	$requestUri = $_SERVER['REQUEST_URI'];
	
	header('Location: '.$uri.'/' . $Directory . $AppName . $requestUri); // Go Target Page
	exit;
	
