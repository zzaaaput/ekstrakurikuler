<?php include 'koneksi.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM pendaftaran JOIN siswa ON pendaftaran.id_siswa = siswa.id_siswa WHERE id_pendaftaran = '$id'")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2>Edit Pendaftaran</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="<?= $data['kelas'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Ekstrakurikuler</label>
            <select name="id_ekskul" class="form-control" required>
                <option value="">-- Pilih --</option>
                <?php
                $ekskul = $conn->query("SELECT * FROM ekstrakurikuler");
                while ($row = $ekskul->fetch_assoc()) {
                    $selected = ($row['id_ekstrakurikuler'] == $data['id_ekstrakurikuler']) ? "selected" : "";
                    echo "<option value='{$row['id_ekstrakurikuler']}' $selected>{$row['nama_ekstrakurikuler']}</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $id_ekskul = $_POST['id_ekskul'];

        // Update siswa
        $conn->query("UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id_siswa='{$data['id_siswa']}'");

        // Update pendaftaran
        $conn->query("UPDATE pendaftaran SET id_ekstrakurikuler='$id_ekskul' WHERE id_pendaftaran='$id'");

        echo "<div class='alert alert-success mt-3'>Data berhasil diperbarui!</div>";
    }
    ?>
</div>
</body>
</html>
