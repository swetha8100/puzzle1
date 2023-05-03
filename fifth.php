<?php
// check if the form has been submitted
if(isset($_POST['user_answer'])) {
  // get the user's answer
  $answer = $_POST['user_answer'];
  
  // check if the answer is correct
  if($answer == '15') {
    // redirect to the second question
    header('Location: sixth.php');
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
	<title>Question:05</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">All The Best</h1>
<div class="s1">
	<h2>Question:05</h2>
</div>
	
<div>
  <form class="s2" method='POST'>
  <h2>What is the missing value?</h2>
  <br>
  <img src="https://1.bp.blogspot.com/-A0CXAAXVjm4/XrA7-gogwkI/AAAAAAAAhSc/-ivi6uTq9E44aigYhp0KADHvKxSlB0Z0QCLcBGAsYHQ/s1600/solve-mcdonalds-math-expression.jpg" alt="image" width="300px">
  <br><br>
    <input type='text' name='user_answer' style='padding: 10px; font-size: 20px;'>
    <br>
    <br>
    <input type='submit' value='Submit' style='margin-left: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;'>
  </form>
</div>
</body>
</html>


