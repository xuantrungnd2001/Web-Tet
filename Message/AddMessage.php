<?php require_once "connectDB.php" ?>
<?php
  session_start();
  $content = $_POST['message'];
  $sender = $_SESSION['username'];
  $result = $conn->prepare('INSERT INTO message_content (content, sender) VALUES (:content, :sender)');
  $result->execute(['content' => $content, 'sender' => $sender]);
  
  header('location: ShowMessage.php');
?>
