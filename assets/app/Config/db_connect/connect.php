<?php

namespace App\Config\db_connect;

use PDO;
use PDOException;

class connect {
    public static function connection() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=practica", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }
}
