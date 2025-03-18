<?php include 'koneksi.php';

$id = $_GET['id'];

// Hapus dari pendaftaran, siswa tetap dihapus juga (optional)
$pendaftaran = $conn->query("SELECT id_siswa FROM pendaftaran WHERE id_pendaftaran='$id'")->fetch_assoc();
$id_siswa = $pendaftaran['id_siswa'];

$conn->query("DELETE FROM pendaftaran WHERE id_pendaftaran='$id'");
$conn->query("DELETE FROM siswa WHERE id_siswa='$id_siswa'");

header("Location: index.php");
