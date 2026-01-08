<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Buku</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #ffc0cb, #ff69b4, #ff85a2);
    font-family: 'Segoe UI', sans-serif;
}

.card {
    border-radius: 20px;
    padding: 35px;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 20px 40px rgba(0,0,0,.15);
    background: #ffe4ec;
}

h4 {
    font-weight: 700;
    color: #ff1493;
    margin-bottom: 25px;
}

.form-control,
.form-select {
    border-radius: 12px;
    padding: 10px;
    background: #ffd6e8;
    margin-bottom: 15px;
}

.btn-submit {
    background: linear-gradient(135deg, #ff69b4, #ff1493);
    border: none;
    color: white;
    border-radius: 12px;
    padding: 10px;
    font-weight: 600;
}

.btn-submit:hover {
    opacity: .9;
}
</style>
</head>

<body>

<div class="card">
  <h4 class="text-center">Tambah Buku</h4>

  <form method="POST" action="index.php?page=buku-simpan" enctype="multipart/form-data">

    <label>Judul</label>
    <input type="text" name="judul" class="form-control" required>

    <label>Penulis</label>
    <input type="text" name="penulis" class="form-control" required>

    <label>Penerbit</label>
    <input type="text" name="penerbit" class="form-control" required>

    <label>Tahun</label>
    <input type="number" name="tahun" class="form-control" required>

    <label>Cover Buku</label>
    <input type="file" name="gambar" class="form-control">

    <button type="submit" class="btn btn-submit w-100 mt-3">Simpan</button>

  </form>
</div>

</body>
</html>
