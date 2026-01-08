<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Register</title>

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
    max-width: 400px;
    box-shadow: 0 20px 40px rgba(0,0,0,.15);
    background: #ffe4ec;
    animation: fadeIn 0.6s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(15px); }
    to { opacity: 1; transform: translateY(0); }
}

h4 {
    font-weight: 700;
    color: #ff1493;
}

.form-control,
.form-select {
    border-radius: 12px;
    padding: 10px;
    background: #ffd6e8;
}

.btn-register {
    background: linear-gradient(135deg, #ff69b4, #ff1493);
    border: none;
    color: white;
    border-radius: 12px;
    padding: 10px;
    font-weight: 600;
}

.btn-register:hover {
    opacity: .9;
}

.login-link {
    color: #ff1493;
    font-weight: 500;
    text-decoration: none;
}

.login-link:hover {
    text-decoration: underline;
}
</style>
</head>

<body>

<div class="card text-center">
  <h4 class="mb-4"> Register</h4>

  <form method="POST" action="index.php?page=register">
    <div class="mb-3 text-start">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3 text-start">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3 text-start">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <!-- Pilih role -->
    <div class="mb-3 text-start">
      <label>Role</label>
      <select name="role" class="form-select" required>
        <option value="">-- Pilih Role --</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>

    <button type="submit" class="btn btn-register w-100 mb-3">
      Daftar
    </button>
  </form>

  <a href="index.php?page=login" class="login-link">
    Sudah punya akun? Login
  </a>
</div>

</body>
</html>
