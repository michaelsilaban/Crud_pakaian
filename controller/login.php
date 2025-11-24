<?php
// Pastikan path ke models/m_user.php sudah benar
include_once '../models/m_user.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user = new m_user();

    $input_user = $_POST['username'];
    $input_password = $_POST['password']; 

    $result = $user->login($input_user); 

    // Verifikasi cek jika data user ditemukan DAN password cocok
    if ($result && password_verify($input_password, $result['password'])) {
        
        // Login Berhasil
        $_SESSION['data'] = $result;
        
        // Pengarahan berdasarkan role
        if ($result['role'] === 'admin') {
            header("location: ../view/v_tampil_data.php");
            exit;
        } elseif ($result['role'] === 'user') {
            header("location: ../view/v_Dashboard_user.php");
            exit;
        } else {
            // Role tidak terdefinisi
            echo "<script>alert('Login Berhasil, namun peran/role pengguna tidak terdefinisi.'); window.location='../index.php'</script>";
        }
    } else {
        // Output kesalahan
        echo "<script>alert('Username atau Password Salah'); window.location='../index.php'</script>";
    }
    
} else {
    header("location: ../index.php");
    exit;
}
?>
