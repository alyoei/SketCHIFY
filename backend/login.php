<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['username'];
            if (password_verify($password, $row['password'])) {
    $_SESSION['user'] = $row['username'];
    echo "<script>alert('Login berhasil!'); window.location='../index.php';</script>";
}

        } else {
            echo "<script>alert('Password salah!'); window.location='../login.html';</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan!'); window.location='../login.html';</script>";
    }
}
?>
