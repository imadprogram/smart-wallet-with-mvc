<?php
namespace App\Models;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Database;
use PDO;


class User {
    private $Firstname;
    private $Lastname;
    private $Email;
    private $Password;
    private $db;

    public function __construct($Firstname , $Lastname , $Email , $Password) {
        $this->Firstname = $Firstname;
        $this->Lastname  = $Lastname;
        $this->Email     = $Email;
        $this->Password  = $Password;
        $this->db = Database::getInstance()->getConnection();
    }


    public function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email";

        $stmt = $this->db->prepare($sql);

        $stmt->execute(['email' => $email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}