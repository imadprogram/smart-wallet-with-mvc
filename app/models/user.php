<?php
namespace App\Models;

use App\Core\Database;
use PDO;


class User {
    private $Firstname;
    private $Lastname;
    private $Email;
    private $Password;
    private $db;

    public function __construct($Firstname , $Lastname , $Email , $Password) {
        $this->db = Database::getInstance()->getConnection();
    }


    public function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email";

        $stmt = $this->db->prepare($sql);

        $stmt->execute(['email' => $email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function register ($Firstname , $Lastname , $Email , $Password) {
        $sql = "INSERT INTO users(first_name , last_name , email , password) VALUES()";
    }
}