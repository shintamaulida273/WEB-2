<?php

namespace models;

require_once __DIR__ . '/../config/Connection.php'; 

use config\Connection; 
use PDO; 

class anggota 
{
    public static function get() 
   {    
       $pdo = Connection::make();
       $sql = 'SELECT * FROM anggota';
       $query = $pdo->query($sql);
       return $query->fetchALL(PDO::FETCH_ASSOC);
   } 
 
   public static function create($data) 
   { 
        $pdo = Connection::make();
        $sql = 'INSERT INTO anggota (id, status_aktif, pegawai_id, kartu_diskon_id) VALUES (:id, :status_aktif, :pegawai_id, :kartu_diskon_id)';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':id', $data['id']);
        $statement->bindParam(':status_aktif', $data['status_aktif']);
        $statement->bindParam(':pegawai_id', $data['pegawai_id']);
        $statement->bindParam(':kartu_diskon_id', $data['kartu_diskon_id']);

        var_dump($data); die;
        return $statement->execute();
        //     ':firstname' => $data['firstname'],
        //     ':lastname' => $data['lastname'],
        //     ':gender' => $data['gender'],
        //     ':age' => $data['age'],
        //     ':weight' => $data['weight'],
        // ]);
   } 
 
   public static function find($id) 
   { 
       $pdo = Connection::make();
       $sql = 'SELECT * FROM anggota WHERE id = :id';
       $statement= $pdo->prepare($sql);
       $statement->bindParam(':id', $id);
       $statement->execute();

       return $statement->fetch(PDO::FETCH_ASSOC);
   } 
 
//    public static function update($data) 
//    { 
//     $pdo = Connection::make();
//     $sql = 'UPDATE anggota SET id=:id, status_aktif=:status_aktif, pegawai_id=:pegawai_id, kartu_diskon_id=:kartu_diskon_id, WHERE id =:id';
//     $statement = $pdo->prepare($sql);
//     $statement->bindParam(':id', $data['id']);
//     $statement->bindParam(':status_aktif', $data['status_aktif']);
//     $statement->bindParam(':pegawai_id', $data['pegawai_id']);
//     $statement->bindParam(':kartu_diskon_id', $data['kartu_diskon_id']);

//     return $statement->execute();
//    }

    public static function update($data) 
{ 
    $pdo = Connection::make();
    $sql = 'UPDATE pegawai 
            SET status_aktif = :status_aktif, 
                pegawai_id = :pegawai_id, 
                kartu_diskon_id = :kartu_diskon_id 
            WHERE id = :id';

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $data['id']);
    $statement->bindParam(':status_aktif', $data['status_aktif']);
    $statement->bindParam(':pegawai_id', $data['pegawai_id']);
    $statement->bindParam(':kartu_diskon_id', $data['kartu_diskon_id']);

    return $statement->execute();
}


   public static function delete($id) 
    { 
    $pdo = Connection::make();
    $sql = 'DELETE FROM anggota WHERE id = :id';
    $statement= $pdo->prepare($sql);
    $statement->bindParam(':id', $id);

    return $statement->execute(); 
    } 
}