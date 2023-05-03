<?php
// check if the form has been submitted
if(isset($_POST['user_answer'])) {
  // get the user's answer
  $answer = $_POST['user_answer'];
  
  // check if the answer is correct
  if($answer == '16') {
    // redirect to the second question
    header('Location: dead2.php');
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
	<title>Question:10</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">All The Best</h1>
<div class="s1">
	<h2>Question:10</h2>
</div>
	
<div>
  <form class="s2" method='POST'>
    <h2>Calculate the shortest path cost from E to G?</h2>
  <br>
  <img src="https://kkjavatutorials.com/wp-content/uploads/2020/07/Weighted-Graph.jpg" alt="image" width="500px">
  <br><br>
    <input type='text' name='user_answer' style='padding: 10px; font-size: 20px;'>
    <br>
    <br>
    <input type='submit' value='Submit' style='margin-left: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;'>
  </form>
</div>
</body>
</html>

