<?php
require '.config/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AhmadHas SMS</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300ita‌​lic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
	<div class="title">
		<h1>Ahmad<i>Has</i> SMS</h1>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div>
				<form method="post" action="send.php">
					<div class="form-group">
						<label for="message">From</label>
						<select class="form-control" name="from">
							<?php include 'get_list.php';?>
						</select>
					</div>
					<div class="form-group">
						<label for="dest">To</label>
						<input type="text" class="form-control" id="dest" placeholder="Type a Phone Number(s), saparated by a comma" name="dest">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" rows="3" id="message" placeholder="Type a Message" name="message"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="Send Message!">Submit</button>
				</form>

				<!-- <form method="post" action="send.php">
					Message: <input type="text" name="message"><br><br>
					From:
					<select name="from">
						<?php // include 'get_list.php'; ?>
					</select><br><br>
					To: <input type="text" name="dest"><br><br>
					<input type="submit" name="submit" value="Send Message!" />
				</form> -->
			</div>
		</div>
	</div>
</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>