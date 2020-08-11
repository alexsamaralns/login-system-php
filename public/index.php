<?php

    ini_set('display_errors', 1);

	session_start();
	require_once(dirname(__DIR__) . '/src/config/config.php');
	
	$core = new Core;
	echo $core->start($_GET);