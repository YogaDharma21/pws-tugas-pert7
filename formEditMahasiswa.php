<?php
require_once './classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();
$data = $mahasiswa->getById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <form action="./process_edit_mahasiswa.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="<?= $data['nim']; ?>">
        <br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $data['nama']; ?>">
        <br>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $data['jurusan'] ?>">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?= $data['alamat'] ?>">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $data['email'] ?>">
        <br>
        <label for="noHp">No Handphone</label>
        <input type="text" name="noHp" id="noHp" value="<?= $data['no_hp'] ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
