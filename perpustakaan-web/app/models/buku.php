<?php
function bukuIndex() {
    global $conn;

    $limit = 5;
    $hal = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
    $awal = ($hal - 1) * $limit;

    $query = mysqli_query($conn, "
        SELECT * FROM buku
        LIMIT $awal, $limit
    ");
    $buku = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $totalData = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM buku"));
    $totalHal = ceil($totalData / $limit);

    // 👉 KIRIM VARIABEL KE VIEW
    require "app/views/buku/index.php";
}


function bukuTambah() {
    require "app/views/buku/tambah.php";
}

function bukuSimpan() {
    global $conn;

    mysqli_query($conn, "
        INSERT INTO buku VALUES (
            NULL,
            '{$_POST['judul']}',
            '{$_POST['penulis']}',
            '{$_POST['penerbit']}',
            '{$_POST['tahun']}'
        )
    ");

    header("Location: index.php?page=buku");
}

function bukuEdit() {
    global $conn;
    $id = $_GET['id'];

    $q = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($q);

    require "app/views/buku/edit.php";
}

function bukuUpdate() {
    global $conn;

    mysqli_query($conn, "
        UPDATE buku SET
            judul='{$_POST['judul']}',
            penulis='{$_POST['penulis']}',
            penerbit='{$_POST['penerbit']}',
            tahun='{$_POST['tahun']}'
        WHERE id={$_POST['id']}
    ");

    header("Location: index.php?page=buku");
}

function bukuHapus() {
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id={$_GET['id']}");
    header("Location: index.php?page=buku");
}
