<?php
require_once './classes/Users.php';
$users = new Users();
if ($users->delete($_GET['id'])) {
    echo "<script> alert('User berhasil dihapus'); window.location.href = './formUser.php'; </script>";
} else {
    echo "<script> alert('Gagal menghapus user'); window.location.href = './formUser.php'; </script>";
}
