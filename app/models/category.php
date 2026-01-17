<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Category {
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    // Fetch only categories that match the type ('income' or 'expense')
    public function findAllByType($type) {
        $sql = "SELECT * FROM categories WHERE type = :type";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['type' => $type]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}