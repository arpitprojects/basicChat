<?php
	require 'core.inc.php';
	if(isset($_POST['sent'])){
		if(send_msg($_POST['sender'] , $_POST['message'])){
			echo "MSG SENT";
		}else{
			echo "MSG FAILED TO SENT";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			BASIC CHAT APP!
		</title>
	<link rel="stylesheet" href="css/main.css" type="text/css"/><!--include css-->
	</head>
	<body>
	<div id="input">
<form action="index.php" method="post">
	<label for="name">ENTER NAME:</label>
	<input type="text" name="sender" id="name"/>
	<br/><hr/>
	<label for="message">MESSAGE:</label>
	<input type="text" name="message" id="message"/>
	<br/><hr/>
	<input type="submit" value="SEND" name="sent"/>
	<br/>
</form>	
</div>
<div id="messages">

</div><!-- templete-->
<!-- javascript files-->
<script src="script/js/jquery.js" type="text/javascript"></script>
<script src="script/js/auto_chat.js" type="text/javascript"></script>
</body>
</html>