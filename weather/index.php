<!DOCTYPE html>
<html>
<head><title>Weather Report Using api - hackerrahul.com</title>


	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../css/style.css">
		<title>NCI eSports</title>
	</head>
	
	<body>
	<header>
		<div class="box">
			<div id="logo">
				<a href="../index.php"><img src="../img/logo.png"></a>
			</div>
			<nav>
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../weather/index.php" target="external">Weather</a></li>
					<li><a href="../events2.php">Events</a></li>
					<li><a href="../register.php">Register</a></li>
					<li><a href="../login.php">Log in</a></li>
				</ul>
			</nav>	
		</div>
	</header>


	<center><br><br>
		<form method="GET" action="get.php">
		<h1>Type City and Country</h1>
		<br><p>For Example Dublin, Ireland</p>
			<input type="text" name="q" required>
			<input type="submit" name="submit">
		</form>
	</center>
</body>

<footer>
		<section id="social">
			<div class="box">
				<a href="https://www.facebook.com/NCIRL/" target="external"><img src="../img/fb.png"></a>
				<a href="https://www.instagram.com/ncirl/?hl=en" target="external"><img src="../img/ig.png"></a>
			</div>
		</section>
	</footer>
	
</html>