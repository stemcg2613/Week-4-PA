<?php
require_once __DIR__ . '/Database.php';

class ProductModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAllProducts(): array
    {
        
        $sql = "SELECT ProductNo, Name, Type
                FROM products
                ORDER BY ProductNo ASC";
        return $this->db->query($sql)->fetchAll();
    }
}