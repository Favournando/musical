<?php
$mysqli = new mysqli("localhost","favour","123456","musical");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>