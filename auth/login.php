<?php
session_start();
if (isset($_SESSION["username"])) {
  if ($_SESSION['role'] == "admin") {
    header('Location: ../admin/home.php');
  } else if ($_SESSION['role'] == "doctor") {
    header('Location: ../doctor/home.php');
  } else if ($_SESSION['role'] == "nurse") {
    header('Location: ../nurse/home.php');
  } else {
    header('Location: ../index.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>Login</title>
</head>

<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form method="post" action="authenticate.php">
          <h2>Login</h2>
          <div class="inputbox">
            <ion-icon name="person-outline"></ion-icon>
            <input type="text" required name="username">
            <label for="username">Username</label>
          </div>
          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" required name="password">
            <label for="password">Password</label>
          </div>
          <button>Login</button>
        </form>
      </div>
    </div>
  </section>

  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>