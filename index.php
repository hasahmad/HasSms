<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>AhmadHas SMS</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300ita‌​lic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
			font-family: 'Roboto';
			background: #22313F;
			margin 0;
			color: #ECF0F1;
		}

		h1 {
			text-align: center;
		}
		span {
			font-style: oblique;
		}
		/*input {
		    border: 5px solid white; 
		    -webkit-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 
		    -moz-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 
		    box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 
		    padding: 15px;
		    background: rgba(255,255,255,0.5);
		    margin: 0 0 10px 0;
		}*/
	</style>
</head>
<body>

<header>
	<h1>Welcome to <span>AhmadHas SMS</span></h1>
</header>	

<div class="content">
	<div>
		<form method="post" action="send.php">
			Message: <input type="text" name="message"><br><br>
			From:
			<select name="from">
				<?php include 'get_list.php';?>
			</select><br><br>
			To: <input type="text" name="dest"><br><br>
			<input type="submit" name="submit" value="Send Message!" />
		</form>

	</div>
</div>

</body>
</html>