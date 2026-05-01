<?php
require_once './config/Database.php';
class Users extends Database
{
    private $table = 'users';

    public function create($nama, $email, $password)
    {
        $qry = "INSERT INTO $this->table (nama, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("sss", $nama, $email, $password);
        return $stmt->execute();
    }

    public function getAllUsers()
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

    public function update($id, $nama, $email)
    {
        $qry = "UPDATE $this->table SET nama = ?, email = ? WHERE id = ?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("ssi", $nama, $email, $id);
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
