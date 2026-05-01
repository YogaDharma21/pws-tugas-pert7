<?php
require_once './classes/Users.php';
var_dump($_POST);
$users = new Users();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if ($users->create($nama, $email, $password)) {
        echo "<script>alert('Akun berhasil ditambahkan.'); window.location.href = './formUser.php';</script>";
    } else {
        echo "<script>alert('Akun gagal ditambahkan.'); window.location.href = './formUser.php';</script>";
    }
}
