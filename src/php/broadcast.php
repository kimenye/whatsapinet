<?php
	
	require_once 'whatsprot.class.php';

	// $username = "254723944369"; 
	// $username = "254727550098"; 
	
	// $password = "Z9bNfsdFtRLHXG22KtKB/hfUFJM=";
	// $password = "2wVCTiXn3CW5md4TAgGOIMnyskk=";
	
	// $nickname = "#OngairFootball";
	$nickname = "Ongair";
	
	// $identity = "%87%01%184%a6%07%1b%24j%e6%02%11p%ff%d1%c8%f4h%fb%02";
	// $identity = "%e3%das%0d%b2%13%23f%8b%abib%08%d44%a3%f0%f0%0c%f3";
	
	// $target = "254705866564";

	$w = new WhatsProt($username, $identity, $nickname, true);
	$w->connect();
	$w->loginWithPassword($password);

	// $w->sendStatusUpdate("#OngairFootball - Fantasy Football on WhatsApp");

	// $receipients = array("254705866564");

	// $w->sendBroadcastImage($receipients, "/Users/trevor/Desktop/stadium.jpg", false);
	// $w->sendBroadcastMessage($receipients, "Does this work?");

	// class ProcessNode
	// {
	//     protected $wp = false;
	//     protected $target = false;

	//     public function __construct($wp, $target)
	//     {
	//         $this->wp = $wp;
	//         $this->target = $target;
	//     }

	//     /**
	//      * @param ProtocolNode $node
	//      */
	//     public function process($node)
	//     {
	//         // Example of process function, you have to guess a number (psss it's 5)
	//         // If you guess it right you get a gift
	//         $text = $node->getChild('body');
	//         $text = $text->getData();

	//         // print_r 

	//         $this->wp->sendMessage($this->target, "Thank you for this message");
	// 	}
	// }

	// $pn = new ProcessNode($w, $target);
	// $w->setNewMessageBind($pn);

	// while (1) {
	//     $w->pollMessages();
	//     $msgs = $w->getMessages();
	//     foreach ($msgs as $m) {
	//         # process inbound messages
	//         //print($m->NodeString("") . "\n");
	//     }
	// }
?>