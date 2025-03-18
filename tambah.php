<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2>Tambah Pendaftaran Ekstrakurikuler</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ekstrakurikuler</label>
            <select name="id_ekskul" class="form-control" required>
                <option value="">-- Pilih --</option>
                <?php
                $ekskul = $conn->query("SELECT * FROM ekstrakurikuler");
                while ($data = $ekskul->fetch_assoc()) {
                    echo "<option value='{$data['id_ekstrakurikuler']}'>{$data['nama_ekstrakurikuler']}</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $id_ekskul = $_POST['id_ekskul'];

        // Simpan siswa
        $conn->query("INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')");
        $id_siswa = $conn->insert_id;

        // Simpan pendaftaran
        $conn->query("INSERT INTO pendaftaran (id_siswa, id_ekstrakurikuler) VALUES ('$id_siswa', '$id_ekskul')");

        echo "<div class='alert alert-success mt-3'>Pendaftaran berhasil!</div>";
    }
    ?>
</div>
</body>
</html>
