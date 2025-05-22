<?php
session_start();
include "koneksi/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($result);

if ($user && ($password== $user['password'])) {
    $_SESSION['username'] = $user['username'];
    header("Location: index.php");
} else {
    echo "<script>alert('Login gagal!'); window.location='login.php';</script>";
}
?>
