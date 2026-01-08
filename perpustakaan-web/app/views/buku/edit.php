<?php require "app/views/layout/header.php"; ?>

<h2>✏ Edit Buku</h2>

<form method="post" action="index.php?page=buku-update">

    <input type="hidden" name="id" value="<?= $buku['id']; ?>">

    <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" name="judul" value="<?= $buku['judul']; ?>" required>
    </div>

    <div class="form-group">
        <label>Penulis</label>
        <input type="text" name="penulis" value="<?= $buku['penulis']; ?>" required>
    </div>

    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?= $buku['penerbit']; ?>" required>
    </div>

    <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun" value="<?= $buku['tahun']; ?>" required>
    </div>

    <button class="btn btn-primary">🔄 Update Buku</button>
    <a href="index.php?page=buku" class="btn btn-edit">↩ Kembali</a>

</form>

<?php require "app/views/layout/footer.php"; ?>
