<?php
session_start();
include 'db.php';


$showWarning = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $table = "accounts";

    $sql = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows == 1) {
           
            $_SESSION['username'] = $username;
            header("location: homepage.php");
            exit(); 
        } else {

            $showWarning = true;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login ┃ GD Optical Clinic</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="imgs/ico.png" />
  <script src="login.js"></script>
</head>
<body>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <img src="imgs/mainlogo.png" alt="Your Logo" class="logo">
  <h3>Login</h3>

  <label for="username">Username</label>
  <input type="text" placeholder="Enter Username" id="username" name="username">

  <label for="password">Password</label>
  <input type="password" placeholder="Enter Password" id="password" name="password">


  <?php
  if ($showWarning) {
      echo '<p class="warning" style="color: red;">Invalid username or password. Please try again.</p>';
  }
  ?>

  <button type="submit">Log In</button>
</form>
</body>
</html>
