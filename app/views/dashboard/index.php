<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Smart Wallet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="bg-gray-800 border-b border-gray-700 px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-green-400">Smart Wallet</h1>
        <div class="flex items-center gap-4">
            <span class="text-gray-300">Welcome, <?= htmlspecialchars($user_name) ?></span>
            <a href="/smart-wallet-MVC/public/auth/logout" class="text-red-400 hover:text-red-300 transition">
                <i class="fa-solid fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-10">
        
        <div class="bg-gradient-to-r from-gray-800 to-gray-700 rounded-3xl p-8 mb-10 shadow-xl border border-gray-600 text-center relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-gray-400 text-sm uppercase tracking-widest mb-2">Total Balance</h2>
                <h3 class="text-5xl font-extrabold text-white mb-2">
                    $ <?= number_format($balance, 2) ?>
                </h3>
                <p class="text-gray-400 text-sm">Available in your wallet</p>
            </div>
            <div class="absolute top-0 right-0 -mr-10 -mt-10 w-40 h-40 bg-white opacity-5 rounded-full blur-2xl"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            
            <a href="/smart-wallet-MVC/public/incomes" class="block bg-gray-800 hover:bg-gray-750 transition p-6 rounded-2xl shadow-lg border border-gray-700 flex items-center justify-between group cursor-pointer">
                <div>
                    <p class="text-gray-400 text-sm mb-1 group-hover:text-white transition">Total Income</p>
                    <p class="text-3xl font-bold text-green-400">
                        + $ <?= number_format($totalIncome, 2) ?>
                    </p>
                    <span class="text-xs text-gray-500 underline mt-1 block">View History</span>
                </div>
                <div class="w-12 h-12 bg-green-500/10 rounded-full flex items-center justify-center group-hover:bg-green-500/20 transition">
                    <i class="fa-solid fa-arrow-up text-green-500 text-xl"></i>
                </div>
            </a>

            <a href="/smart-wallet-MVC/public/expenses" class="block bg-gray-800 hover:bg-gray-750 transition p-6 rounded-2xl shadow-lg border border-gray-700 flex items-center justify-between group cursor-pointer">
                <div>
                    <p class="text-gray-400 text-sm mb-1 group-hover:text-white transition">Total Expenses</p>
                    <p class="text-3xl font-bold text-red-400">
                        - $ <?= number_format($totalExpense, 2) ?>
                    </p>
                    <span class="text-xs text-gray-500 underline mt-1 block">View History</span>
                </div>
                <div class="w-12 h-12 bg-red-500/10 rounded-full flex items-center justify-center group-hover:bg-red-500/20 transition">
                    <i class="fa-solid fa-arrow-down text-red-500 text-xl"></i>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="/smart-wallet-MVC/public/incomes/create" class="group bg-gray-800 hover:bg-gray-700 border border-gray-700 p-6 rounded-2xl flex items-center justify-between transition cursor-pointer">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                        <i class="fa-solid fa-plus text-white text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white">Add Income</h4>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-500 group-hover:translate-x-1 transition"></i>
            </a>

            <a href="/smart-wallet-MVC/public/expenses/create" class="group bg-gray-800 hover:bg-gray-700 border border-gray-700 p-6 rounded-2xl flex items-center justify-between transition cursor-pointer">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                        <i class="fa-solid fa-minus text-white text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white">Add Expense</h4>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-500 group-hover:translate-x-1 transition"></i>
            </a>
        </div>

    </div>

</body>
</html>