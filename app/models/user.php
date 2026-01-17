<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class User {
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function findByEmail($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);

        return $stmt->fetch(PDO::FETCH_OBJ); 
    }

    public function register($Firstname, $Lastname, $Email, $Password){
        $sql = "INSERT INTO users(first_name, last_name, email, password)
                VALUES(:Firstname, :Lastname, :Email, :Password)
                RETURNING *";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            'Firstname' => $Firstname,
            'Lastname' => $Lastname,
            'Email' => $Email,
            'Password' => password_hash($Password, PASSWORD_DEFAULT) 
        ]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}