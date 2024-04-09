<?php
session_start();
$connect_mysql = mysqli_connect("localhost", "root", "", "signup");

if (!$connect_mysql) {
    die("Connection Failed: " . mysqli_connect_error());
}

$mail = $_POST['mai'];
$password = $_POST['pwd'];

$result = mysqli_query($connect_mysql, "SELECT * FROM user WHERE mail='$mail' AND password='$password'");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["mail"] = $row['mail'];
        $_SESSION["password"] = $row['password'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (20 * 3660);
    }
    setcookie('mail', $_POST['mai'], time() + 3660);
    setcookie('password', $_POST['pwd'], time() + 3660);
    header('location: index.php');
} else {
    $message = "Invalid Username or Password!";
    header("Location:Signin.php?msg=Invalid Username or Password!");
}

mysqli_close($connect_mysql);
?>
