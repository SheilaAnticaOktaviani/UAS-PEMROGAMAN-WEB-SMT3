<?php if (!isset($_SESSION['user'])) exit; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #cce7ff, #ffd6e8, #e6ccff);
        }
        .card {
            border-radius: 25px;
        }
    </style>
</head>
<body class="vh-100 d-flex align-items-center justify-content-center">

<div class="card p-4 text-center shadow" style="width:420px">
    <h4>💜 Selamat Datang</h4>
    <h5 class="text-primary"><?= $_SESSION['user']['nama'] ?></h5>
    <p class="text-muted">Role: <?= $_SESSION['user']['role'] ?></p>

    <a href="index.php?page=buku" class="btn btn-primary w-100 mb-2">Daftar Buku Perpustakaan</a>
    <a href="index.php?page=logout" class="btn btn-danger w-100">Logout</a>
</div>

</body>
</html>