<?php 

  // connect to database (MySQLi)
  $conn = mysqli_connect('localhost', 'julien', 'azerty', 'ninja_pizza');

  //check database connection
  if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // write query for all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas';

  // make query & get result
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free from memory
  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
  <?php include('templates/header.php') ?>


  <?php include('templates/footer.php') ?>
</html>