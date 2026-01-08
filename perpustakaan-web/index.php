<?php
session_start();
require "app/config/database.php";
require "app/controllers/AuthController.php";
require "app/controllers/BukuController.php";

$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {

    case 'login':
        authLogin();
        break;

    case 'register':
        authRegister();
        break;

    case 'logout':
        authLogout();
        break;

    case 'buku':
        bukuIndex();
        break;

    case 'buku-tambah':
        bukuTambah();
        break;

    case 'buku-simpan':
        bukuSimpan();
        break;

    case 'buku-edit':
        bukuEdit();
        break;

    case 'buku-update':
        bukuUpdate();
        break;

    case 'buku-hapus':
        bukuHapus();
        break;


    default:
        authLogin();
        break;
}
