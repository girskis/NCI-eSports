
<?php include('server.php');?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="./css/style.css">
		<title>NCI eSports</title>
	</head>

<body>
	<header>
		<div class="box">
			<div id="logo">
				<a href="index.php"><img src="./img/logo.png"></a>
			</div>
			<nav>
				<ul>
					<li class="selected"><a href="index.php">Home</a></li>
					<li><a href="events2.php">Events</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Log in</a></li>
				</ul>
			</nav>	
		</div>
	</header>
	
 <div class="title">
 <h2>Login </h2>
 </div>
 <form method="post" action="login.php">
 <?php include('errors.php'); ?>
 <div class="input-group">
 <label>Username: </label>
 <input type="text" name="username">
 </div>
  <div class="input-group">
 <label>Password: </label>
 <input type="password" name="password">
 </div>
<div class="input-group">
 <button type="submit" name="login_user" class="btn">Login</button>
 </div>
 <p>
    Not a member? <a href="register.php">Sign up</a>

 </p>
	</form>
	<br>
	<footer>
		<section id="social">
			<div class="box">
				<a href="https://www.facebook.com/NCIRL/" target="external"><img src="./img/fb.png"></a>
				<a href="https://www.instagram.com/ncirl/?hl=en" target="external"><img src="./img/ig.png"></a>
			</div>
		</section>
	</footer>
</body>

</html>