<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg,
                #e8f2ff,
                #f6e6f2,
                #efe9ff
            );
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        }

        h2 {
            margin-top: 0;
            color: #6b5bb5;
            font-weight: 600;
        }

        /* BUTTON */
        .btn {
            padding: 10px 18px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, #9bbcff, #bfa9ff);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(159,140,255,.4);
        }

        .btn-edit {
            background: #f4d6ea;
            color: #7a3b78;
        }

        .btn-delete {
            background: #fde1e1;
            color: #a04545;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th {
            background: linear-gradient(135deg, #f1e9ff, #e7f0ff);
            padding: 14px;
            text-align: left;
            color: #5e5a7a;
            font-weight: 600;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #f0f0f0;
            color: #444;
        }

        tr:hover {
            background: #faf7ff;
        }

        /* FORM */
        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-top: 6px;
        }

        input:focus {
            outline: none;
            border-color: #bfa9ff;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .actions a {
            margin-right: 8px;
        }
    </style>

</head>
<body>
    <nav class="navbar">
    <span>📚 Perpustakaan</span>
    <a href="index.php?page=logout">Logout</a>
</nav>

<div class="container">