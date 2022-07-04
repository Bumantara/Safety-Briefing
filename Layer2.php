<!DOCTYPE html>
<html lang="en">
<head>
	<title>Safety Briefing</title>
	<link rel="stylesheet" href="L2_style.css">
</head>
<body>
	<div class="head">
		<p> Safety Briefing Notification</p>
		<br>
	</div>
	<div class="safety">
		<p> <b><i>Hi!</i></b></p>
		<p><?php echo $_GET['nama']; ?> <br> <?php echo $_GET['company']; ?> <br> <?php echo   date("Y-m-d") . "<br>";?> </p>
		<p>Thank you to read <br> Safety Briefing </p>
		<p> <b><i>Safety Comes First <br> Think Safety <br> Act Safely</i></b> </p>
		<form action="index.html">
			<input type="submit" value="Close">
		</form>
	</div>

    

</body>
</html>