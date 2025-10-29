<?php
include 'db.php';

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email sudah terdaftar!'); window.location='../register.html';</script>";
    } else {
        $query = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='../login.html';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan.'); window.location='../register.html';</script>";
        }
    }
}
?>
