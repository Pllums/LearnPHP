<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>What is your birthday?</h2>
  <form action="index.php" method="post">
    <input type="date" name="birthdate">
    <input type="submit" value="Verify">
  </form>

  <!-- <h2>Hello, please login</h2> 
  <form action="index.php" method="get">
    <label for="">username</label>
    <input type="text" name="username">
    <label for="">password</label>
    <input type="password" name="password">
    <input type="submit" value="login">
  </form>-->
</body>

</html>


<?php
$birth_year = substr($_POST["birthdate"], 0, 4);
$cur_year = date("Y");

$cur_age = $cur_year - $birth_year;

//$user = $_GET["username"];

// echo "Thank you for logging in {$user}";

if ($cur_age >= 18) {

  echo " Thank you for verifying. You may enter";
}

/*
  $name = "Arik";
  $food = "pizza";
  $quantity = 7;
  $cost = 17.99;
  $total_cost = $cost * $quantity;


  echo "$name bought {$quantity} {$food}s at \${$cost} each for a grand total of \${$total_cost}";
*/
?>