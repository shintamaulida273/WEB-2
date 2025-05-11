<?php
$host = 'localhost';
$db = 'learn_pdo';
$user = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    require_once 'config.php';
    class Connection
    {
        public static function make($host, $db, $user, $password)
        {
            $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
            try {
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                return new PDO($dsn, $user, $password, $options);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }
}
return Connection::make($host, $db, $user, $password);
