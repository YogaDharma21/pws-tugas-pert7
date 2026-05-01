
<?php
require_once './classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $noHp = $_POST['noHp'];

    if ($mahasiswa->update($id, $nim, $name, $jurusan, $alamat, $email, $noHp)) {
        echo "<script>alert('Mahasiswa berhasil diedit.'); window.location.href = './formMahasiswa.php';</script>";
    } else {
        echo "<script>alert('Mahasiswa gagal diedit.'); window.location.href = './formMahasiswa.php';</script>";
    }
} else {
    echo "<script>alert('Silahkan submit form dengan POST method.');</script>";
}
?>
