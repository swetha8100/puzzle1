<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">Welcome to my game</h1>
<div class="s1">
	<h2>Home Page</h2>
</div>
	
<div class="s2">
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

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h4 align="center">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h4>
    	<h4 align="center"> <a href="index.php?logout='1'" style="color: red;">logout</a> </h4>
    <?php endif ?>

</div>
<br><br>
  <div align="center">
  <!-- Add a form with a "Start Game" button -->
  <form class="s2" action="start_game.php" method="post" width="100%">
		<h3>The Mysterious City of Gold</h3>
		<br>
		<p><h4>Theme:</h4>The treasure hunt game is based on the story of an ancient civilization that had discovered the secret to turning ordinary materials into gold. However, the city where the civilization lived was abandoned and its location had been lost for centuries.</p>
	    <p>You have to take on the role of adventurers who have come across a map that is believed to lead to the lost city of gold. The map is full of questions and is incomplete, so you must use your soft skills to chase and complete it. Along the way, you will encounter obstacles and challenges that will test your physical and mental abilities. You need to use all your skills to solve the puzzles and overcome the challenges. The game will culminate in a final challenge where you must use your knowledge to enter the city and uncover the secret of turning materials into gold.</p>
		<p><b>If you encounter any obstacle where you can't go ahead or you were stuck in looping, it means you have taken wrong step somewhere behind. Now, please go back and choose wisely</b></p>
		<br><h4 align="center">Please click the button below to start playing.</h4>
    <button type="submit" class="btn" name="start_game">Start Chasing</button>
</form>
	</div>
</body>
</html>