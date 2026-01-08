<?php
function login() {
    global $conn;

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $q = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $user = mysqli_fetch_assoc($q);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: index.php?page=buku");
        }
    }

    require "app/views/auth/login.php";
}

function register() {
    global $conn;

    if (isset($_POST['email'])) {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        mysqli_query($conn, "
            INSERT INTO users VALUES (
                NULL,
                '{$_POST['nama']}',
                '{$_POST['email']}',
                '$pass',
                'user'
            )
        ");
        header("Location: index.php?page=login");
    }

    require "app/views/auth/register.php";
}

function logout() {
    session_destroy();
    header("Location: index.php?page=login");
}
