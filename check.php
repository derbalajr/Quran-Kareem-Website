<?php
session_start();
$users = array("derballo99@gmail.com","omarrderbala@outlook.com");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $_POST['email'];
  if (in_array($user, $users)) {
    $_SESSION['user'] = $user;
    header("Location: index.php");
  }
  else {
    echo "Access Denied";
  }
}
 ?>
