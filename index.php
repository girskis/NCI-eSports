<!DOCTYPE html>


<?php include('server.php');?>


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
					<li><a href="index.php">Home</a></li>
					<li><a href="weather/index.php">Weather</a></li>
					<li><a href="events2.php">Events</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Log in</a></li>
				</ul>
			</nav>	
		</div>
	</header>
	
    <section id="banner">
		<div class="box">
			<h1>Welcome to NCI eSports</h1>
			<p>Compete in college-organized tournaments for games such as: Fortnite, CS:GO and League of Legends.
		</div>
    </section>
	
	   <section id="games">
      <div class="box">
        <div class="game">
          <img src="./img/fortnite.ico">
          <h3>Fortnite</h3>
          <p>A cooperative shooter-survival game for up to four players to fight off zombie-like husks, defend objects with fortifications you can build, and a battle royale mode where up to 100 players fight to be the last person standing.</p>
        </div>
        <div class="game">
          <img src="./img/csgo.jpg">
          <h3>CS:GO</h3>
          <p>Counter-Strike: Global Offensive (CS:GO) expands upon the team-based first person shooter gameplay the original Counter-Strike pioneered when it launched in 1999. Two teams compete in multiple rounds of objective-based game modes with the goal of winning enough rounds to win the match.</p>
        </div>
        <div class="game">
          <img src="./img/lol.png">
          <h3>LoL</h3>
          <p>League of Legends is a fast-paced, competitive online game that blends the speed and intensity of an RTS with RPG elements. Two teams of powerful champions, each with a unique design and playstyle, battle head-to-head across multiple battlefields and game modes.</p>
        </div>
      </div>
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

