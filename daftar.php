<?php include 'koneksi.php'; ?>

<div class="container">
    <h2>Formulir Pendaftaran Ekstrakurikuler</h2>
    <form action="pendaftaran.php" method="POST">
        <div class="mb-3">
            <label for="nama">Nama Siswa:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_ekskul">Pilih Ekstrakurikuler:</label>
            <select name="id_ekskul" class="form-control" required>
                <?php
                $ekskul = mysqli_query($koneksi, "SELECT * FROM ekstrakurikuler");
                while ($row = mysqli_fetch_assoc($ekskul)) {
                    echo "<option value='".$row['id_ekskul']."'>".$row['nama_ekstrakurikuler']."</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
