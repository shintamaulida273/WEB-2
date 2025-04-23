<?php

namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class User
{
    private static $connection;

    // Mendapatkan koneksi database
    private static function getConnection()
    {
        if (self::$connection === null) {
            // Menggunakan metode make() dari kelas Connection untuk mendapatkan koneksi
            self::$connection = Connection::make();
        }
        return self::$connection;
    }

    public static function get()
    {
        // get all users
        $stmt = self::getConnection()->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function create($data)
    {
        // insert user
        $stmt = self::getConnection()->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', password_hash($data['password'], PASSWORD_DEFAULT)); // Hash the password
        return $stmt->execute();
    }
    public static function find($id)
    {
        // find user by id
        $stmt = self::getConnection()->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function update($data)
    {
        // update user by id
        $stmt = self::getConnection()->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':id', $data['id']);
        return $stmt->execute();
    }
    public static function delete($id)
    {
        // delete user by id
        $stmt = self::getConnection()->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
