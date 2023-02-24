<?php

  $dbHost = "sql210.epizy.com";
  $dbUser = "epiz_33373847";
  $dbPass = "itBv7uZQQu";
  $dbName = "epiz_33373847_db1contact";
  $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

  $email = $password = "";
  $emailErr = $passwordErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }

    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
    }


    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      header("Location: index.html");
      exit();
    } else {
      echo "Invalid email or password";
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label>Email:</label>
  <input type="email" name="email"><br>
  <span class="error"><?php echo $emailErr;?></span><br>
  <label>Password:</label>
  <input type="password" name="password"><br>
  <span class="error"><?php echo $passwordErr;?></span><br>
  <input type="submit" name="submit" value="Login">
</form>
