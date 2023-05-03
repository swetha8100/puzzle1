<?php
// check if the form has been submitted
if(isset($_POST['user_answer'])) {
  // get the user's answer
  $answer = $_POST['user_answer'];
  
  // check if the answer is correct
  if($answer == 'metal detector') {
    // redirect to the second question
    header('Location: fourth.php');
    exit;
  } else {
    echo "<br>";
    echo "<p align='center' style='color: red;'>Incorrect. Please try again.</p>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Question:03</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">All The Best</h1>
<div class="s1">
	<h2>Question:03</h2>
</div>
	
<div>
  <form class="s2" method='POST'>
  <h2>Read the given passage carefully and answer the question(in lowercase only).</h2><br>
  <p>Gold hunting has been a popular activity for centuries. The thrill of discovering a precious metal that can fetch high prices on the market has drawn many to scour the land in search of it. In the early days, gold was often found by accident, such as when someone stumbled across a shiny rock while out walking. Nowadays, gold prospectors have a range of tools and techniques to help them find the precious metal, from panning for gold in rivers to using metal detectors on land.</p>
  <br><p><b>Question:</b></p>
  <p>What was one way early gold hunters found the precious metal?</p>
  <br>
    <input type='text' name='user_answer' style='padding: 10px; font-size: 20px;'>
    <br>
    <br>
    <input type='submit' value='Submit' style='margin-left: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;'>
  </form>
</div>
</body>
</html>

