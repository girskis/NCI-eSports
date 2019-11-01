
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<!DOCTYPE html>



<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="./css/style.css">
		<title>NCI eSports</title>
		 <script src = "js/main.js"> </script>
	</head>

<body>
	<header>

			<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

</div>



		<div class="box">
			<div id="logo">
				<a href="index.php"><img src="./img/logo.png"></a>
			</div>


			<nav>

				<ul>
				<div class="login_box">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>   	
		<p>You're logged in as <strong style="color: #6190E8;"><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
					<li><a href="index.php">Home</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="http://localhost:3000/" style="color: #EDDA74">Team Finder</a></li>
					<li><a href="welcome.php?logout='1'" style="color: #6190E8">Log out</a></li>
				</ul>
			</nav>
		</div>
		

	</header>
	
	    <section id="banner2">
		<div class="box">
			<h1>Registration</h1>
			<p>Register your team by clicking on your game of choice below.<p>
		</div>
    </section>

<section id="games2">
      <div class="box">
        <div class="game">
          <img src="./img/fortnite.ico">
          <h3><a class="btn_link" href="events.php">Fortnite</a></h3>
        </div>
        <div class="game">
          <img src="./img/csgo.jpg">
          <h3><a class="btn_link" href="events.php">CS:GO</a></h3>
        </div>
        <div class="game">
          <img src="./img/lol.png">
          <h3><a class="btn_link" href="events.php">LoL</a></h3>
        </div>
      </div>
    </section>




<section>


	</section>
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
