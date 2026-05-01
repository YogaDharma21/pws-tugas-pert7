<?php
require_once './config/Database.php';
class Mahasiswa extends Database
{
    private $table = 'mahasiswa';

    public function create($nim, $nama, $jurusan, $alamat, $email, $noHp)
    {
        $qry = "INSERT INTO $this->table (nim, nama, jurusan, alamat, email, no_hp) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("ssssss", $nim, $nama, $jurusan, $alamat, $email, $noHp);
        return $stmt->execute();
    }

    public function getAllMahasiswa()
    {
        $qry = "SELECT * FROM $this->table";
        return $this->conn->query($qry);
    }

    public function getById($id)
    {
        $qry = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $nim, $nama, $jurusan, $alamat, $email, $noHp)
    {
        $qry = "UPDATE $this->table SET nim = ?, nama = ?, jurusan = ?, alamat = ?, email = ?, no_hp = ? WHERE id = ?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("ssssssi", $nim, $nama, $jurusan, $alamat, $email, $noHp, $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $qry = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
