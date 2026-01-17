<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Expense {
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($userId, $amount, $description, $date, $categoryId) {
        $sql = "INSERT INTO expenses (user_id, amount, description, date, category_id) 
                VALUES (:user_id, :amount, :description, :date, :category_id)";

        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute([
            'user_id' => $userId,
            'amount' => $amount,
            'description' => $description,
            'date' => $date,
            'category_id' => $categoryId
        ]);
    }

    public function getTotal($userId) {
        $sql = "SELECT SUM(amount) as total FROM expenses WHERE user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $userId]);
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        
        return $row->total ?? 0;
    }
}