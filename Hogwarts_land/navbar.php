<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "harry");
?>
<!DOCTYPE html>
<html>

<head>
  <title>
  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="books.php">BOOKS</a></li>
        <li><a href="feedback.php">FEEDBACK</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="user.php">PROFILE</a></li>
        <li><a href="fine.php">FINES</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">
            <div style="color: white">
              <?php
              $q = mysqli_query($db, "SELECT * FROM register where username='$_SESSION[login_user]' ;");
              $row = mysqli_fetch_assoc($q);
              echo "<img class='img-circle profile_img' height=30 width=30 src='Images/" . $row['user_image'] . "'>";
              echo " " . $_SESSION['login_user'];
              ?>
            </div>
          </a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
      </ul>
    </div>
  </nav>
</body>

</html>