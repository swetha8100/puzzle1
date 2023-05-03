<?php
// check if the form has been submitted
if(isset($_POST['door'])) {
  // get the chosen door
  $door = $_POST['door'];
  
  // redirect to the appropriate page based on the chosen door
  switch($door) {
    case 'Door1':
      header('Location: fifth.php');
      break;
    case 'Door2':
      header('Location: eighth.php');
      break;
    case 'Door3':
      header('Location: tenth.php');
      break;
    default:
      echo "<br>";
      echo "<p align='center' style='color: red;'>Invalid choice. Please try again.</p>";
      break;
  }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Question:04</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">All The Best</h1>
<div class="s1">
	<h2>Question:04</h2>
</div>
	
<div>
  <form class="s2" method='POST'>
  <h2>Choose any path at your own risk in which only one leads to the treasure.</h2>
  <br>
  <img src="https://static.vecteezy.com/system/resources/previews/000/488/790/original/old-wooden-door-vector-illustration.jpg" alt="Door 1" width="150px">
  <input type='submit' name='door' value='Door1' style='margin-left: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;'>
  <img src="https://static.vecteezy.com/system/resources/previews/000/488/790/original/old-wooden-door-vector-illustration.jpg" alt="Door 2" width="150px">
  <input type='submit' name='door' value='Door2' style='margin-left: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;'>
  <img src="https://static.vecteezy.com/system/resources/previews/000/488/790/original/old-wooden-door-vector-illustration.jpg" alt="Door 3" width="150px">
  <input type='submit' name='door' value='Door3' style='margin-left: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;'>
  </form>
</div>
</body>
</html>

