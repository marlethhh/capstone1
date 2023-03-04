<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'doctor') {
  header('Location: ../index.php');
  exit();
}

include "../auth/conn.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Doctor | Home</title>
  <link rel="stylesheet" href="../includes/style.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
  <div class="parent">
    <div class="child header">
      <span class="header-content">
        <p><?= $_SESSION['username'] ?></p>
        <a href="./logout.php">Logout</a>
      </span>
    </div>
    <div class="main">
      <div class="child">
        <div class="container">
          <div class="logo">
            <!-- ADD LOGO -->
          </div>
          <nav>
            <ul class="link-items">
              <li class="link-item active">
                <a href="./home.php" class="link">
                  <ion-icon name="home-outline"></ion-icon>
                  <span>Home</span>
                </a>
              </li>
              <li class="link-item">
                <a href="./patientrecords.php" class="link">
                  <ion-icon name="person-outline"></ion-icon>
                  <span>Patient Records</span>
                </a>
              </li>
              <li class="link-item">
                <a href="./addpatientrecord.php" class="link">
                  <ion-icon name="file-tray-full-outline"></ion-icon>
                  <span>Add Patient</span>
                </a>
              </li>
              <li class="link-item">
                <a href="./addfindings.php" class="link">
                  <ion-icon name="medkit-outline"></ion-icon>
                  <span>Add Findings</span>
                </a>
              </li>
              <li class="link-item user">
                <a href="./logout.php" class="link">
                  <img src="../public/winter.jpg" alt="user-icon">
                  <span>
                    <h4><?= $_SESSION['username'] ?></h4>
                    <p><?= $_SESSION['role'] ?></p>
                  </span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="child content">
        <div class="home">
          <img src="./img/background.jpg">
        </div>
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>