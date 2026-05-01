<?php
require_once './classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $noHp = $_POST['noHp'];

    if ($mahasiswa->update($id, $nama, $jurusan, $alamat, $email, $noHp)) {
        echo "<script>alert('Data mahasiswa berhasil diperbarui.'); window.location.href = './formMahasiswa.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal memperbarui data mahasiswa.'); window.location.href = './formMahasiswa.php';</script>";
    }
} else {
    echo "Metode HTTP tidak valid.";
}
