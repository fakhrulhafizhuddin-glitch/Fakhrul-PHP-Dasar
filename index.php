<?php
// Array Multidimensi 
$mahasiswa = [
    [
        "nim" => "2508478",
        "nama" => "Fhazza Ganteng",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "fhazza@upi.melesat",
        "nilai" => 100
    ],
    [
        "nim" => "2507794",
        "nama" => "Ginayu Enyu",
        "jurusan" => "Pendidikan Guru Pendidikan Anak Usia Dini",
        "email" => "genyu@upi.melesat",
        "nilai" => 71
    ],
    [
        "nim" => "2502915",
        "nama" => "Azmil Ramadhan",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "azmiel@upi.melesat",
        "nilai" => 87
    ],
    [
        "nim" => "2512702", 
        "nama" => "Dimas Saputra",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "masdim@upi.melesat",
        "nilai" => 69
    ],
    [
        "nim" => "2520112",
        "nama" => "Popon Bala-Bala",
        "jurusan" => "Pendidikan Tata Boga",
        "email" => "ceupopon@upi.melesat",
        "nilai" => 54
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Mahasiswa Multitalenta</title>
    <!-- Bootstrap v5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Kita kasih style dulu, biar berwarna seperti hidup Fhazza wkwk */
        body {
            background-color: #5243da; 
        }
        .header-custom {
            background-color: #681c72;
            color: #fbfffe; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background-color: #ffc107; 
            color: #000000;
            font-weight: bold;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e0a800;
        }
        .table-custom thead {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header-custom mb-4 text-center">
            <h2 class="fw-bold">Daftar Mahasiswa Multitalenta</h2>
            <p class="mb-0 text-white">Mini Website PHP Dasar Promnet Fhazza Cihuy</p>
        </div>

        <!-- Tombol Form POST -->
        <a href="form_pesan.php" class="btn btn-custom mb-3">Isi Form Pesan</a>

        <div class="table-responsive bg-white p-3 rounded shadow-sm">
            <table class="table table-bordered table-hover table-custom align-middle">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) :

                        // Logika Grade Sesuai Modul PHP yang Sudah Dikirim
                        if ($mhs["nilai"] >= 80) {
                            $grade = "A";
                        } elseif ($mhs["nilai"] >= 70) {
                            $grade = "B";
                        } elseif ($mhs["nilai"] >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        // Logika Status Lulus/Tidak Lulus Sesuai Modul PHP yang Sudah Dikirim
                        if ($mhs["nilai"] >= 70) {
                            $status = "<span class='badge bg-success'>Lulus</span>";
                        } else {
                            $status = "<span class='badge bg-danger'>Tidak Lulus</span>";
                        }
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $mhs["nim"]; ?></td>
                            <td><?= $mhs["nama"]; ?></td>
                            <td><?= $mhs["jurusan"]; ?></td>
                            <td><?= $mhs["nilai"]; ?></td>
                            <td class="fw-bold text-center"><?= $grade; ?></td>
                            <td class="text-center"><?= $status; ?></td>
                            <td>
                                <!-- Tombol Detail Metode GET -->
                                <a href="detail.php?nim=<?= $mhs['nim']; ?>&nama=<?= $mhs['nama']; ?>&jurusan=<?= $mhs['jurusan']; ?>&email=<?= $mhs['email']; ?>&nilai=<?= $mhs['nilai']; ?>&grade=<?= $grade; ?>&status=<?= strip_tags($status); ?>" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>