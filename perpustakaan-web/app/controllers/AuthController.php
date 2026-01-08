<?php

function authLogin() {
    global $conn;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $q = mysqli_query($conn, "
            SELECT * FROM users 
            WHERE email='$email' AND password='$password'
        ");

        $user = mysqli_fetch_assoc($q);

        if ($user) {
            // SIMPAN DATA USER KE SESSION
            $_SESSION['user'] = [
                'id'    => $user['id'],
                'nama'  => $user['nama'],
                'email' => $user['email'],
                'role'  => $user['role']
            ];

            header("Location: index.php?page=buku");
            exit;
        } else {
            $error = "Email atau password salah";
        }
    }

    require "app/views/auth/login.php";
}

function authRegister() {
    global $conn;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nama     = $_POST['nama'];
        $email    = $_POST['email'];
        $password = md5($_POST['password']);
        $role     = $_POST['role']; // ROLE DARI FORM

        // CEK EMAIL
        $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        if (mysqli_num_rows($cek) > 0) {
            echo "<script>
                alert('Email sudah terdaftar! Silakan login.');
                window.location='index.php?page=login';
            </script>";
            exit;
        }

        // SIMPAN USER + ROLE
        mysqli_query($conn, "
            INSERT INTO users (nama, email, password, role)
            VALUES ('$nama', '$email', '$password', '$role')
        ");

        echo "<script>
            alert('Registrasi berhasil! Silakan login.');
            window.location='index.php?page=login';
        </script>";
        exit;
    }

    require "app/views/auth/register.php";
}

function authLogout() {
    session_destroy();
    header("Location: index.php?page=login");
    exit;
}
