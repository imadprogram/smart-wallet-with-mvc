<?php

class User {
    private $Firstname;
    private $Lastname;
    private $Email;
    private $Password;


    public function __construct($Firstname , $Lastname , $Email , $Password) {
        $this->Firstname = $Firstname;
        $this->Lastname  = $Lastname;
        $this->Email     = $Email;
        $this->Password  = $Password;
    }


    public function findByEmail() {
        $sql = "SELECT * FROM users WHERE email = :email";

        $stmt = 
    }
}