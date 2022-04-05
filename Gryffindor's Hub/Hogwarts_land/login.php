<?php
session_start();
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['userid']) || empty($_POST['pswrd'])) {
        $error = "Username or Password is invalid";
    } else {
        $username = $_POST['userid'];
        $password = $_POST['pswrd'];

        $conn = mysqli_connect("localhost", "root", "", "harry");

        $query = "SELECT username, password from register where username=? AND password=? LIMIT 1";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if ($stmt->fetch())
            $_SESSION['login_user'] = $username;
        header("location: profile.php");
    }
    mysqli_close($conn);
}
