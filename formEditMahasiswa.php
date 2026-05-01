<?php
require_once './classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();
$data = $mahasiswa->getById($_GET['id']);
var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <form action="./process_add_mahasiswa.php" method="POST">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim">
        <br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="noHp">No Handphone</label>
        <input type="text" name="noHp" id="noHp">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
