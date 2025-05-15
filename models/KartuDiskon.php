<?php

namespace models;

require_once __DIR__ . '/../config/Connection.php'; 

use config\Connection; 
use PDO; 

class kartu_diskon 
{
    public static function get()
    {
        $pdo = Connection::make();
        $sql = 'SELECT * FROM pesanan';
        $query = $pdo->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $pdo = Connection::make();
        $sql = 'INSERT INTO kartu_diskon (id, nama, deskripsi, persen_diskon) VALUES (:id, :nama, :deskripsi, :pesen_diskon)';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':id', $data['id']);
        $statement->bindParam(':nama', $data['nama']);
        $statement->bindParam(':deskripsi', $data['deskrpisi']);
        $statement->bindParam(':persen_diskon', $data['persen_diskon']);
        
        return $statement->execute();
    }

    // public static function find($id)
    // {
    //     $pdo = Connection::make();
    //     $sql = 'SELECT * FROM pesanan WHERE id = :id';
    //     $statement = $pdo->prepare($sql);
    //     $statement->bindParam(':id', $id);
    //     $statement->execute();
    //     return $statement->fetch(PDO::FETCH_ASSOC);
    // }

    public static function update($data)
    {
        $pdo = Connection::make();
        $sql = 'UPDATE kartu_diskon SET id = :id, nama = :nama, deskripsi = :deskripsi, persen_diskon = :persen_diskon WHERE id = :id';
        $statement = $pdo->prepare($sql);
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':id', $data['id']);
        $statement->bindParam(':nama', $data['nama']);
        $statement->bindParam(':deskripsi', $data['deskrpisi']);
        $statement->bindParam(':persen_diskon', $data['persen_diskon']);
        return $statement->execute();
    }

    // public static function delete($id)
    // {
    //     $pdo = Connection::make();
    //     $sql = 'DELETE FROM pesanan WHERE id = :id';
    //     $statement = $pdo->prepare($sql);
    //     $statement->bindParam(':id', $id);
    //     return $statement->execute();
    // }
}