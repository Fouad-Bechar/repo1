<?php

  $dbHost = "sql210.epizy.com";
  $dbUser = "epiz_33373847";
  $dbPass = "itBv7uZQQu";
  $dbName = "epiz_33373847_db1contact";
  $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);


  $name = $email = $password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
      echo "Registration successful!";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
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
  <label>Name:</label>
  <input type="text" name="name"><br><br>
  <label>Email:</label>
  <input type="email" name="email"><br><br>
  <label>Password:</label>
  <input type="password" name="password"><br><br>
  <input type="submit" name="submit" value="Register">
</form>
