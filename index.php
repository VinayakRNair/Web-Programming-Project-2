<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The BOARD GAME</title>
<link href='project2.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <form action = "about.php" method="post" name="sign up for beta form">
      <div class="header">
		<img src="dice1.png" width="250" height="350" class="pic">
         <p>The BOARD GAME</p>
      </div>
      <div class="signup">
        <p>Hello Gamer. Please Sign up !!</p></div>
      <div class="input">
				<input type="text" class="button" required id="name" name="name" placeholder="Enter Name">
			</div >
			<div class="input">
    <input type="text" class="button" required id="email" name="email" placeholder="Enter Email">
      </div>


			<div class="checkboxy">

		     <input required name="checky" id="checky" value="1" type="checkbox" /><label class="terms">ACCEPT</label>
				 <a class = "tnc" href="TandC.html"> TERMS AND CONDITIONS</a>
	</div>
			<div class="input">
				<input type="submit" class="button" id="submit" value="SIGN UP">

			</div>
    </form>
  </body>
</html>