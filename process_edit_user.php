<?php
require_once './classes/Users.php';
$users = new Users();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $email = $_POST['email'];

    if ($users->update($id, $nama, $email)) {
        echo "<script>alert('User berhasil diupdate.'); window.location.href = './formUser.php';</script>";
    } else {
        echo "<script>alert('User gagal diupdate.'); window.location.href = './formUser.php';</script>";
    }
}
?>