<?php
	
	require_once 'whatsprot.class.php';

	$username = $argv[1];
	$password = $argv[2];
	$nickname = $argv[3];
	$identity = $argv[4];
	$method = $argv[5];
	$args = $argv[6];
	$targets = $argv[7];

	echo "Username: ".$username."\r\n";
	echo "Password: ".$password."\r\n";
	echo "Nickname: ".$nickname."\r\n";
	echo "Identity: ".$identity."\r\n";
	echo "Method: ".$method."\r\n";
	echo "Args: ".$args."\r\n";

	$w = new WhatsProt($username, $identity, $nickname, true);
	$w->connect();
	$w->loginWithPassword($password);

	if ($method == "sendStatusUpdate") {
		echo "About to send status update.\r\n";
		$w->sendStatusUpdate($args);
	}
	elseif ($method == "sendProfilePicture") {
		echo "About to send profile picture.\r\n";
		$w->sendSetProfilePicture($args);
	}
	elseif ($method == "broadcastMessage") {
		$targets = explode(",", $targets);
		echo "About to broadcast a message.\r\n".print_r($targets)."\r\n";
		$w->sendBroadcastMessage($targets, $args);
	}
	elseif ($method == "sendBroadcastImage") {
		$targets = explode(",", $targets);
		$w->sendBroadcastImage($targets, $args, false);
	}
	
	sleep(5);
?>