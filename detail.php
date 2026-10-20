<?php
if (!isset($_GET["nim"]) || !isset($_GET["nama"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Detail Mahasiswa Abadi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .card-custom {
            border-top: 5px solid #10a043;
        }

        .text-accent {
            color: #10a043;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card p-4 shadow-sm w-50 mx-auto card-custom">
            <h3 class="fw-bold text-accent">Detail Mahasiswa</h3>
            <hr>
            <!-- Data Metode GET -->
            <p><strong>NIM:</strong> <?= htmlspecialchars($_GET["nim"]); ?></p>
            <p><strong>Nama:</strong> <?= htmlspecialchars($_GET["nama"]); ?></p>
            <p><strong>Jurusan:</strong> <?= htmlspecialchars($_GET["jurusan"]); ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($_GET["email"]); ?></p>
            <p><strong>Nilai:</strong> <?= htmlspecialchars($_GET["nilai"]); ?></p>
            <p><strong>Grade:</strong> <span class="badge bg-success text-light"><?= htmlspecialchars($_GET["grade"]); ?></span></p>
            <p><strong>Status:</strong> <?= htmlspecialchars($_GET["status"]); ?></p>

            <a href="index.php" class="btn btn-success mt-3 w-100">Kembali ke Daftar</a>
        </div>
    </div>
</body>

</html>