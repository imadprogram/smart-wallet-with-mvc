<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Income {
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function findAll($userId) {
        $sql = "SELECT * FROM incomes WHERE user_id = :user_id ORDER BY date DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function create($userId, $amount, $description, $date, $categoryId) {
        
        $sql = "INSERT INTO incomes (user_id, amount, description, date, category_id) 
                VALUES (:user_id, :amount, :description, :date, :category_id)
                RETURNING id";

        $stmt = $this->db->prepare($sql);
        
        $stmt->execute([
            'user_id' => $userId,
            'amount' => $amount,
            'description' => $description,
            'date' => $date,
            'category_id' => $categoryId 
        ]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getTotalIncome($userId) {
        $sql = "SELECT SUM(amount) as total FROM incomes WHERE user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $userId]);
        
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result->total ?? 0;
    }
}