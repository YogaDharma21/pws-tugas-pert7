<?php
require_once './classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();
if ($mahasiswa->delete($_GET['id'])) {
    echo "<script> alert('User berhasil dihapus'); window.location.href = './formMahasiswa.php'; </script>";
} else {
    echo "<script> alert('User gagal dihapus'); window.location.href = './formMahasiswa.php'; </script>";
}
