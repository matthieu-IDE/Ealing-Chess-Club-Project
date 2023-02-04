<?php
  $name = $_POST['name'];
  $comment = $_POST['comment'];

  $conn = mysqli_connect('localhost', 'user', 'password', 'database');

  $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
  mysqli_query($conn, $sql);

  mysqli_close($conn);
?>
