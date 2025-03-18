<?php
include 'koneksi.php';

// Ambil input dari user
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$id_ekskul = $_POST['id_ekskul'];

// Cari tanggal mulai & pembina dari ekskul
$queryEkskul = mysqli_query($koneksi, "SELECT * FROM ekstrakurikuler WHERE id_ekskul='$id_ekskul'");
$dataEkskul = mysqli_fetch_assoc($queryEkskul);
$tanggal_mulai = $dataEkskul['tanggal_mulai'];
$id_pembina = $dataEkskul['id_pembina'];

// Tambahkan siswa ke tabel siswa
mysqli_query($koneksi, "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')");

// Ambil ID siswa terbaru
$id_siswa = mysqli_insert_id($koneksi);

// Tambahkan data ke tabel pembina_ekstrakurikuler (relasi)
mysqli_query($koneksi, "INSERT INTO pembina_ekstrakurikuler (id_pembina, daftar_peserta, id_siswa, id_ekskul) VALUES ('$id_pembina', '$nama', '$id_siswa', '$id_ekskul')");

echo "<script>alert('Pendaftaran berhasil!'); window.location='index.php';</script>";
?>
