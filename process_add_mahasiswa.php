<?php
require_once './classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $noHp = $_POST['noHp'];

    if ($mahasiswa->create($nim, $name, $jurusan, $alamat, $email, $noHp)) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan.'); window.location.href = './formMahasiswa.php';</script>";
    } else {
        echo "<script>alert('Data mahasiswa gagal ditambahkan.'); window.location.href = './formMahasiswa.php';</script>";
    }
}
