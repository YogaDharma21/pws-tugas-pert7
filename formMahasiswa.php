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
    <hr>
    <h2>Data User</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Action</th>
        </tr>
        <?php
        require_once './classes/Mahasiswa.php';
        $mahasiswa = new Mahasiswa();
        $data = $mahasiswa->getAllMahasiswa();
        while ($row = $data->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['email']}</td>
                    <td>
                        <a href='formEditMahasiswa.php?id={$row['id']}'>Edit</a> |
                        <a href='process_delete_mahasiswa.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>
