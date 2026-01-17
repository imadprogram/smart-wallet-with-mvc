<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Income;
use App\Models\Expense;

class DashboardController extends Controller {

    public function index() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /smart-wallet-MVC/public/auth/login');
            exit();
        }

        $userId = $_SESSION['user_id'];

        $incomeModel = new Income();
        $expenseModel = new Expense();

        $totalIncome = $incomeModel->getTotal($userId);
        $totalExpense = $expenseModel->getTotal($userId);

        $balance = $totalIncome - $totalExpense;

        $this->view('dashboard/index', [
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'balance' => $balance,
            'user_name' => $_SESSION['user_name'] ?? 'User' 
        ]);
    }
}