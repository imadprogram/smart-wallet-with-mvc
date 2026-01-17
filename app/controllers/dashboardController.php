<?php

namespace App\Controllers;

use App\Core\Controller;

class DashboardController extends Controller
{

    public function index() {
        if (!isset($_SESSION['user_id'])) {

            header('Location: /smart-wallet-MVC/public/auth/login');
            exit();
        }

        $this->view('dashboard/index');
    }
}
