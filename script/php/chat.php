<?php
	require('../../includes/database/connect.db.php');
	require('../../includes/function/chat.func.php');

	
	$messages = get_msg();
		foreach($messages as $message){
			echo '<strong>' . $message['sender'].' SENT'.'<br/>'.'</strong>';//chat .func .php se araray se uthaya gaya hai not datbase name
			echo $message['message'].'<br/><br/>';
		}
	
?>