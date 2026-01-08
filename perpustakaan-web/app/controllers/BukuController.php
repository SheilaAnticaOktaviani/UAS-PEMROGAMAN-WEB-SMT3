<?php
require "app/config/database.php";

function bukuIndex() {
    global $conn;

    // Pagination
    $limit = 5;
    $hal = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
    if ($hal < 1) $hal = 1;
    $offset = ($hal - 1) * $limit;

    // Pencarian
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $where = '';

    if ($keyword != '') {
        $where = "WHERE 
            judul LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%'";
    }

    // Hitung total data (SUDAH TERFILTER)
    $totalQuery = mysqli_query(
        $conn,
        "SELECT COUNT(*) AS total FROM buku $where"
    );
    $totalData = mysqli_fetch_assoc($totalQuery)['total'];
    $totalHal = ceil($totalData / $limit);

    // Ambil data
    $query = mysqli_query(
        $conn,
        "SELECT * FROM buku $where LIMIT $offset, $limit"
    );
    $buku = mysqli_fetch_all($query, MYSQLI_ASSOC);

    require "app/views/buku/index.php";
}

function bukuTambah() {
    require "app/views/buku/tambah.php";
}

function bukuSimpan() {
    global $conn;

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn, "INSERT INTO buku VALUES (
        NULL, '$judul', '$penulis', '$penerbit', '$tahun'
    )");

    header("Location: index.php?page=buku");
}

function bukuEdit() {
    global $conn;

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query);

    require "app/views/buku/edit.php";
}

function bukuUpdate() {
    global $conn;

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn, "UPDATE buku SET
        judul='$judul',
        penulis='$penulis',
        penerbit='$penerbit',
        tahun='$tahun'
        WHERE id=$id
    ");

    header("Location: index.php?page=buku");
}

function bukuHapus() {
    global $conn;

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM buku WHERE id=$id");

    header("Location: index.php?page=buku");

}