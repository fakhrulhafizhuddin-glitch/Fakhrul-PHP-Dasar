<!DOCTYPE html>
<html lang="id">

<head>
    <title>Form Pesan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .form-card {
            border-top: 5px solid #ffc107;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card p-4 shadow-sm w-50 mx-auto form-card">
            <h3 class="fw-bold text-dark mb-4">Form Pesan Mahasiswa</h3>

            <!-- Form Mengirim Data Menggunakan Metode POST -->
            <form action="hasil_pesan.php" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama</label>
                    <input type="text" name="nama" class="form-control" required placeholder="Contoh: Fhazza Ganteng Pisan">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Kelas</label>
                    <input type="text" name="kelas" class="form-control" required placeholder="Contoh: 3C">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Pesan / Kesan</label>
                    <textarea name="pesan" class="form-control" rows="4" required placeholder="Apa yang Anda pikirkan..."></textarea>
                </div>
                <button type="submit" class="btn btn-warning fw-bold text-dark">Kirim Pesan</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>

</html>