<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Income;
use App\Models\Category;

class IncomesController extends Controller {

    public function create() {
        // Security Check
        if (!isset($_SESSION['user_id'])) {
            header('Location: /smart-wallet-MVC/public/auth/login');
            exit();
        }

        $categoryModel = new Category();
        $categories = $categoryModel->findAllByType('income');


        $this->view('incomes/create', ['categories' => $categories]);
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
            $categoryId = $_POST['category_id']; 
            $userId = $_SESSION['user_id'];

            $incomeModel = new Income();
            
            if ($incomeModel->create($userId, $amount, $description, $date, $categoryId)) {
                header('Location: /smart-wallet-MVC/public/dashboard');
                exit();
            } else {
                echo "Error saving income.";
            }
        }
    }
}