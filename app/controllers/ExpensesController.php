<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Expense;
use App\Models\Category;

class ExpensesController extends Controller {

    public function create() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /smart-wallet-MVC/public/auth/login');
            exit();
        }

        $categoryModel = new Category();
        $categories = $categoryModel->findAllByType('expense');

        $this->view('expenses/create', ['categories' => $categories]);
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

            $expenseModel = new Expense();
            
            if ($expenseModel->create($userId, $amount, $description, $date, $categoryId)) {
                header('Location: /smart-wallet-MVC/public/dashboard');
                exit();
            } else {
                echo "Error saving expense.";
            }
        }
    }

    public function index() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /smart-wallet-MVC/public/auth/login');
            exit();
        }

        $userId = $_SESSION['user_id'];
        $expenseModel = new Expense();
        
        $expenses = $expenseModel->findAll($userId);

        $this->view('expenses/index', ['expenses' => $expenses]);
    }
}