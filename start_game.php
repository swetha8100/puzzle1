<?php
// Check if the "Start Game" button was clicked
if(isset($_POST['start_game'])) {
  
  // Code to start the game goes here
  // Redirect the user to the game page
  header('Location: first.php');
  exit;
}
?>
