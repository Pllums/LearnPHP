<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dragon's Dungeoneering</title>
</head>

<body>
  <header>
    <h1>
      Welcome to Baeloun.
    </h1>
    <h3>
      Please login
    </h3>
    <form action="index.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="">
      <label for="password">Password</label>
      <input type="password" name="password" id="">
      <input type="submit" value="Login">
    </form>
  </header>
  <section>

  </section>
</body>

</html>

<?php

$username = $_POST['username'];

echo "Welcome {$username}";

?>