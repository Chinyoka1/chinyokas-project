<?php

class Database {
    public function connect() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=chinyokas_project', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOExeption $e) {
            die('Task failed successfully: ' . $e->getMessage());
        }
    }
}