<?php 

  // connect to database (MySQLi)
  $conn = mysqli_connect('localhost', 'julien', 'azerty', 'ninja_pizza');

  //check database connection
  if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }


?>

<!DOCTYPE html>
<html>
  <?php include('templates/header.php') ?>


  <?php include('templates/footer.php') ?>
</html>