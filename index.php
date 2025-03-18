<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pendaftaran Ekstrakurikuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
<div class="container mt-4">
    <h2 class="mb-4">Daftar Pendaftaran Ekstrakurikuler</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Pendaftaran</a>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Ekstrakurikuler</th>
                <th>Tanggal Mulai</th>
                <th>Pembina</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT pendaftaran.id_pendaftaran, siswa.nama, siswa.kelas, 
                       ekstrakurikuler.nama_ekstrakurikuler, ekstrakurikuler.tanggal_mulai, pembina.nama_pembina
                FROM pendaftaran
                JOIN siswa ON pendaftaran.id_siswa = siswa.id_siswa
                JOIN ekstrakurikuler ON pendaftaran.id_ekstrakurikuler = ekstrakurikuler.id_ekstrakurikuler
                JOIN pembina ON ekstrakurikuler.id_pembina = pembina.id_pembina";
        $result = $conn->query($sql);
        $no = 1;

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['kelas']}</td>
                    <td>{$row['nama_ekstrakurikuler']}</td>
                    <td>{$row['tanggal_mulai']}</td>
                    <td>{$row['nama_pembina']}</td>
                    <td>
                        <a href='edit.php?id={$row['id_pendaftaran']}' class='btn btn-sm btn-warning'>Edit</a>
                        <a href='delete.php?id={$row['id_pendaftaran']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
                    </td>
                </tr>";
            $no++;
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
