<?php
session_start();
require_once '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // Cek email sudah terdaftar
    $check = mysqli_query($conn, "SELECT id_user FROM users WHERE email = '$email'");
    if(mysqli_num_rows($check) > 0) {
        $_SESSION['error'] = 'Email sudah terdaftar';
        header('Location: ../../landing/auth/register.php');
        exit;
    }
    
    // Proses registrasi
    $query = "INSERT INTO users (nama, email, password, role) 
              VALUES ('$nama', '$email', '$password', 'admin')";
              
    if(mysqli_query($conn, $query)) {
        header('Location: ../../landing/auth/login.php?action=register_success');
        exit;
    } else {
        $_SESSION['error'] = 'Terjadi kesalahan saat registrasi';
        header('Location: ../../landing/auth/register.php');
        exit;
    }
}