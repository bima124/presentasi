<?php
session_start();
require_once '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE email = '$email' AND role = 'admin' LIMIT 1";
    $result = mysqli_query($conn, $query);
    
    if($user = mysqli_fetch_assoc($result)) {
        if(password_verify($password, $user['password'])) {
            $_SESSION['admin_id'] = $user['id_user'];
            $_SESSION['admin_nama'] = $user['nama'];
            $_SESSION['admin_role'] = $user['role'];
            header('Location: ../index.php');
            exit;
        }
    }
    
    $_SESSION['error'] = 'Email atau password salah!';
    header('Location: ../../landing/auth/login.php?action=login_gagal');
    exit;
}