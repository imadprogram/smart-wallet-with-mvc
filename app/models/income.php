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
        $sql = "SELECT incomes.*, categories.name as category_name 
                FROM incomes 
                LEFT JOIN categories ON incomes.category_id = categories.id 
                WHERE incomes.user_id = :user_id 
                ORDER BY incomes.date DESC";
                
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

    public function getTotal($userId) {
        $sql = "SELECT SUM(amount) as total FROM incomes WHERE user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $userId]);
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        
        return $row->total ?? 0;
    }
}