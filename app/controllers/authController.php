<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller
{

    public function login()
    {
        $this->view('auth/login');
    }

    public function register()
    {
        $this->view('auth/signup');
    }

    public function registerPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];

            $userModel = new User();

            $newUser = $userModel->register($firstName , $lastName , $email, $password);

            if ($newUser) {
                $_SESSION['user_id'] = $newUser->id;
                $_SESSION['user_name'] = $newUser->first_name." ".$newUser->last_name;
                header('Location: /smart-wallet-MVC/public/dashboard');

            } else {
                echo "Error: Registration failed.";
            }
        }
    }
}
