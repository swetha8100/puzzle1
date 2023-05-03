<?php
// check if the form has been submitted
if(isset($_POST['user_answer'])) {
  // get the user's answer
  $answer = $_POST['user_answer'];
  
  // check if the answer is correct
  if($answer == '296514837') {
    // redirect to the second question
    header('Location: final.php');
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
	<title>Question:07</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">All The Best</h1>
<div class="s1">
	<h2>Question:07</h2>
</div>
	
<div>
  <form class="s2" method='POST'>
  <h2>Solve this Soduku and answer accordingly.</h2><br>
  <img src="https://th.bing.com/th/id/R.ab9dfb474ca7530a4c554fe78fc39706?rik=PbITSIRaSxuLmQ&riu=http%3a%2f%2f3.bp.blogspot.com%2f-i8CCYw5ZZKc%2fTm7183i_KAI%2fAAAAAAAAK8A%2fHtNcH7pnyN0%2fs1600%2feasy%2bsodoku%2bto%2bprint.jpg&ehk=MH54JxHrDn%2fta7RSj02reZMypVRoRRa%2bf3PzRQLYf64%3d&risl=&pid=ImgRaw&r=0" alt="image" width="300px">
  <br><br>
  <h2>Enter the numbers in the last row from left to right.</h2><br>
    <input type='text' name='user_answer' style='padding: 10px; font-size: 20px;'>
    <br>
    <br>
    <input type='submit' value='Submit' style='margin-left: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;'>
  </form>
</div>
</body>
</html>

