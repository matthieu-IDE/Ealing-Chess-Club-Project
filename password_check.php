<?php
// Read the submitted username and password from the form
$submitted_username = $_POST['username'];
$submitted_password = $_POST['password'];

// Hash the username and password using the password_hash function
$hashed_username = password_hash($submitted_username, PASSWORD_DEFAULT);
$hashed_password = password_hash($submitted_password, PASSWORD_DEFAULT);

// Store the hashed username and password in the text file or database
file_put_contents('username.txt', $hashed_username);
file_put_contents('password.txt', $hashed_password);
// Read the stored hashed username and password from the text file or database
$stored_hashed_username = file_get_contents('username.txt');
$stored_hashed_password = file_get_contents('password.txt');

// Read the submitted username and password from the form
$submitted_username = $_POST['username'];
$submitted_password = $_POST['password'];

// Verify the username and password using the password_verify function
if (password_verify($submitted_username, $stored_hashed_username) && password_verify($submitted_password, $stored_hashed_password)) {
  // The username and password are correct
  echo "The username and password are correct!";
  header("Location: dashboard.php");
  exit;
} else {
  // The username and/or password are incorrect
  echo "The username and/or password are incorrect.";
}