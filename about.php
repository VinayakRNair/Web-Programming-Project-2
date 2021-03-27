<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The BOARD GAME</title>
<link href='project2.css' rel='stylesheet' type='text/css'>
  </head>
	<body>
		<style type="text/css">
			body{
				background-image: url(bg-game.jpg);
	            background-size: cover;
			}
		  
		</style>



	<ul>
	<li><a href="summarypage.html">Summary</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="contact.html">Contact</a></li>
	<li><a href="game.php">Game</a></li>
	<li><a href="index.php">Home</a></li>
	</ul>


<div class="welcome">
	<img src="player.jpg" width="250" height="250" class="pic">
	<p>Welcome Abord Gamer : <?= $_POST['name']?>!</p>

</div>
   <div class="header">
		 <p>The BOARD GAME</p>
	</div>


	<div class="description">
		<p>This board game requires two people to play and has a dice for rolling. Each player is given a chance to roll.</br> Based on the number shown on the dice, the player can proceed through the game. </br>As the player proceeds ,they might fall into some of the danger positions, which brings down their score accordingly.
</p></div>

	</div>


	</pre>
	</div>
</div>

</body>
</html>