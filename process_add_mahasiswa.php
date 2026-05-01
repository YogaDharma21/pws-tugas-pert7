<?php
require_once './classes/Users.php';
var_dump($_POST);
$users = new Users();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['name'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $noHp = $_POST['noHp'];

    if ($users->create($nim, $nama, $jurusan, $alamat, $email, $noHp)) {
        echo "<script>alert('Akun berhasil ditambahkan.'); window.location.href = './formUser.php';</script>";
    } else {
        echo "<script>alert('Akun gagal ditambahkan.'); window.location.href = './formUser.php';</script>";
    }
}
