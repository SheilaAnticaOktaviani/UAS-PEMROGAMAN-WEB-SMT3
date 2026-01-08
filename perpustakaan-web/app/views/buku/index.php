<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Buku</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #ffc0cb, #ff69b4, #ff85a2);
      min-height: 100vh;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      border-radius: 20px;
      border: none;
      box-shadow: 0 20px 40px rgba(0,0,0,.15);
      padding: 30px;
      background: #ffe4ec;
    }

    h4 {
      font-weight: 700;
      color: #ff1493;
    }

    .badge-admin {
      background: #ff69b4;
      color: white;
    }

    .badge-user {
      background: #ff85a2;
      color: white;
    }

    .btn-primary {
      background: linear-gradient(135deg, #ff69b4, #ff1493);
      border: none;
    }

    .btn-primary:hover {
      opacity: 0.9;
    }

    .btn-edit {
      background: #ff69b4;
      color: white;
      border-radius: 10px;
      border: none;
    }

    .btn-edit:hover {
      background: #ff1493;
    }

    .btn-danger {
      background: #ff85a2;
      border: none;
    }

    .btn-danger:hover {
      background: #ff1493;
    }

    .logout-btn {
      background: #ff69b4;
      color: white;
      border-radius: 12px;
      border: none;
    }

    .logout-btn:hover {
      background: #ff1493;
    }

    .table thead {
      background: linear-gradient(135deg, #ffd6e8, #ffb6c1);
    }

    .page-item.active .page-link {
      background: linear-gradient(135deg, #ff69b4, #ff1493);
      border: none;
    }

    .page-link {
      color: #ff1493;
    }

    .text-left {
      text-align: left !important;
    }
  </style>
</head>

<body>

<div class="container my-5">
  <div class="card">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4>Daftar Buku Perpustakaan</h4>
      <div class="text-end">
        <span class="badge <?= $_SESSION['user']['role'] === 'admin' ? 'badge-admin' : 'badge-user' ?>">
          <?= strtoupper($_SESSION['user']['role']) ?>
        </span>
        <br>
        <a href="index.php?page=logout" class="btn logout-btn btn-sm mt-2">
          Logout
        </a>
      </div>
    </div>

    <!-- SEARCH + TAMBAH -->
    <div class="row mb-4">
      <div class="col-md-8 mb-2">
        <form method="GET" class="d-flex">
          <input type="hidden" name="page" value="buku">
          <input type="text" name="keyword"
                 class="form-control rounded-pill me-2"
                 placeholder="Cari judul, penulis, penerbit..."
                 value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
          <button class="btn btn-primary rounded-pill px-4">
            Cari
          </button>
        </form>
      </div>

      <?php if ($_SESSION['user']['role'] === 'admin'): ?>
      <div class="col-md-4 text-md-end">
        <a href="index.php?page=buku-tambah" class="btn btn-primary rounded-pill px-4">
          + Tambah Buku
        </a>
      </div>
      <?php endif; ?>
    </div>

    <!-- TABEL -->
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-left">Judul</th>
            <th class="text-left">Penulis</th>
            <th class="text-left">Penerbit</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $halAktif = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
          $limit = 5;
          $no = ($halAktif - 1) * $limit + 1;
        ?>
        <?php if (count($buku) > 0): ?>
          <?php foreach ($buku as $row): ?>
          <tr>
            <td class="text-center"><?= $no++ ?></td>
            <td class="text-left"><?= $row['judul'] ?></td>
            <td class="text-left"><?= $row['penulis'] ?></td>
            <td class="text-left"><?= $row['penerbit'] ?></td>
            <td class="text-center"><?= $row['tahun'] ?></td>
            <td class="text-center">
              <?php if ($_SESSION['user']['role'] === 'admin'): ?>
                <a href="index.php?page=buku-edit&id=<?= $row['id'] ?>" class="btn btn-edit btn-sm">
                  Edit
                </a>
                <a href="index.php?page=buku-hapus&id=<?= $row['id'] ?>"
                   onclick="return confirm('Yakin hapus data?')"
                   class="btn btn-danger btn-sm">
                  Hapus
                </a>
              <?php else: ?>
                <span class="text-muted fst-italic">Read Only</span>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center text-muted">
              Data tidak ditemukan
            </td>
          </tr>
        <?php endif ?>
        </tbody>
      </table>
    </div>

    <!-- PAGINATION -->
    <?php if (isset($totalHal) && $totalHal > 1): ?>
    <nav class="mt-4">
      <ul class="pagination justify-content-center">
        <?php for ($i = 1; $i <= $totalHal; $i++): ?>
          <li class="page-item <?= ($i == $halAktif) ? 'active' : '' ?>">
            <a class="page-link"
               href="index.php?page=buku&hal=<?= $i ?><?= isset($_GET['keyword']) ? '&keyword='.$_GET['keyword'] : '' ?>">
              <?= $i ?>
            </a>
          </li>
        <?php endfor ?>
      </ul>
    </nav>
    <?php endif ?>

  </div>
</div>

</body>
</html>
