<?php
// Panggil file koneksi database
require_once '../config/Database.php'; 

class UserModel {
    private $conn;
    
    public function __construct() {
        // Panggil class Database
        $database = new Database();
        $this->conn = $database->conn; 
    }
    // ... sisa kode lainnya