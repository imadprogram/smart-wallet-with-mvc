<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Income;

class IncomesController extends Controller {

    public function create() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /smart-wallet-MVC/public/auth/login');
            exit();
        }

        $this->view('incomes/create');
    }

    public function store() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /smart-wallet-MVC/public/auth/login');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $amount = $_POST['amount'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $userId = $_SESSION['user_id'];

            $incomeModel = new Income();
            if ($incomeModel->create($userId, $amount, $description, $date)) {
                header('Location: /smart-wallet-MVC/public/dashboard');
            } else {
                
            }
        }
    }
}