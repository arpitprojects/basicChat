<?php
	function get_msg(){		//get msg function
		$query = "SELECT `sender`, `message` FROM `chat`.`chat` ORDER BY `msg_id` DESC";
		$run = mysql_query($query);
		$messages = array();
		
		while($message = mysql_fetch_assoc($run)){
			$messages[]  =array('sender' =>$message['sender'],
						'message' => $message['message']);
		}
		
		return $messages;
		
	}
	function send_msg($sender,$message){		//sent msgs
		if(!empty($sender) && !empty($message)){
			$sender  =mysql_real_escape_string($sender);
			$message  =mysql_real_escape_string($message);
			$query = "INSERT INTO `chat` . `chat` VALUES('','$sender','$message')";
			if($query_run = mysql_query($query)){
				return true;
			}else{
				return false;
			}
			
		}else{
			return false;
		}
	}

?>
<!-- comments-->