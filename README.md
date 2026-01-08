# UAS-PEMROGAMAN-WEB-SMT3
# Nama : SHEILA ANTICA OKTAVIANI
# Kelas : TI.24.A1
# NIM : 312410002
# Aplikasi Data Buku Perpustakaan
## Deksripsi
Aplikasi ini merupakan sebuah aplikasi web sederhana yang dikembangkan menggunakan PHP Native dengan menerapkan konsep Object Oriented Programming (OOP) serta arsitektur Model-View-Controller (MVC). Aplikasi ini dirancang untuk mengelola data buku pada sebuah sistem perpustakaan dan disusun sebagai bagian dari pemenuhan tugas Ujian Akhir Semester (UAS) pada mata kuliah Pemrograman Web.

Fungsionalitas aplikasi mencakup sistem autentikasi pengguna, pengelompokan hak akses berdasarkan peran pengguna (Admin dan User), serta penyediaan fitur Create, Read, Update, Delete (CRUD) secara lengkap. Selain itu, aplikasi juga dilengkapi dengan fitur pencarian data dan pagination untuk memudahkan pengelolaan serta penelusuran data. Dari sisi antarmuka, aplikasi ini dirancang secara responsif dengan pendekatan mobile-first dan memanfaatkan framework Bootstrap untuk memastikan kenyamanan penggunaan pada berbagai ukuran perangkat.

# Fitur Aplikasi
## 1. Autentikasi & Autorisasi
- Login menggunakan username dan password
- Role pengguna:
  
Admin: dapat menambah, mengedit, dan menghapus data buku
User: hanya dapat melihat data buku
Proteksi halaman menggunakan session

### 2. Data Buku Perpustakaan
- Tambah data buku
  
- Tampilkan daftar buku
  
- Edit data buku
  
- Hapus data buku
### 3. Pencarian Data
- Pencarian berdasarkan judul buku
  
- Menggunakan query LIKE pada database
### 4. Pagination
- Menampilkan data buku per halaman
  
- Navigasi halaman otomatis menyesuaikan hasil pencarian

### 5. Desain UI
- Responsive (mobile, tablet, desktop)
  
- Menggunakan Bootstrap
  
- Tampilan bersih dan profesional

# Instalasi & Cara Menjalankan Aplikasi
- Aktifkan Apache dan MySQL melalui XAMPP

- Letakkan folder perpustakaan-web di dalam direktori htdocs

- Buat database dengan nama db_buku

- Import file SQL ke database

- Buka browser dan akses:

http://localhost/perpustakaan-web/

# Akun Login Default
# Admin
- Email : admin123@gmail.com
- Password: admin123
# User
Email : user123@gmail.com
Password: user123

# Dokumentasi Aplikasi
<img width="959" height="401" alt="image" src="https://github.com/user-attachments/assets/79c270e4-f821-407a-8757-e3d75af5198a" />

<img width="1918" height="832" alt="image" src="https://github.com/user-attachments/assets/78aaae52-a0bd-4e2c-8b47-08436f82629f" />

<img width="1913" height="904" alt="image" src="https://github.com/user-attachments/assets/6f65c30c-ec3a-4686-a630-b31158e8c7d3" />


- Halaman Login
- Halaman Dashboard Buku
- Form Tambah Buku
- Form Edit Buku
- Fitur Pencarian
- Pagination

  
  
