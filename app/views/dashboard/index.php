<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Wallet - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="bg-gray-800 shadow-lg border-b border-gray-700">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="bg-blue-600 p-2 rounded-lg">
                    <i class="fa-solid fa-wallet text-white text-xl"></i>
                </div>
                <span class="text-2xl font-bold tracking-wide">Smart Wallet</span>
            </div>
            
            <div class="flex items-center gap-6">
                <div class="text-right hidden md:block">
                    <p class="text-xs text-gray-400">Welcome back,</p>
                    <p class="text-sm font-semibold"><?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
                </div>
                <a href="/smart-wallet-MVC/public/auth/logout" class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg transition text-sm font-medium shadow-md">
                    <i class="fa-solid fa-right-from-bracket mr-2"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gray-800 p-6 rounded-2xl border-l-4 border-blue-500 shadow-xl">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-400 text-sm mb-1">Total Balance</p>
                        <h2 class="text-3xl font-bold text-white">$ 0.00</h2>
                    </div>
                    <div class="bg-blue-500/20 p-3 rounded-full">
                        <i class="fa-solid fa-scale-balanced text-blue-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl border-l-4 border-green-500 shadow-xl">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-400 text-sm mb-1">Total Income</p>
                        <h2 class="text-3xl font-bold text-green-400">+ $ 0.00</h2>
                    </div>
                    <div class="bg-green-500/20 p-3 rounded-full">
                        <i class="fa-solid fa-arrow-trend-up text-green-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl border-l-4 border-red-500 shadow-xl">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-400 text-sm mb-1">Total Expenses</p>
                        <h2 class="text-3xl font-bold text-red-400">- $ 0.00</h2>
                    </div>
                    <div class="bg-red-500/20 p-3 rounded-full">
                        <i class="fa-solid fa-arrow-trend-down text-red-400 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1 bg-gray-800 rounded-2xl p-6 shadow-xl h-fit">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-bolt text-yellow-400"></i> Quick Actions
                </h3>
                
                <div class="space-y-4">
                    <a href="/smart-wallet-MVC/public/incomes/create" class="flex items-center justify-between p-4 bg-gray-700 hover:bg-gray-600 rounded-xl transition group cursor-pointer border border-gray-600 hover:border-green-500">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-500/20 p-2 rounded-lg group-hover:bg-green-500 transition">
                                <i class="fa-solid fa-plus text-green-400 group-hover:text-white"></i>
                            </div>
                            <span class="font-medium">Add Income</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-500"></i>
                    </a>

                    <a href="/smart-wallet-MVC/public/expenses/create" class="flex items-center justify-between p-4 bg-gray-700 hover:bg-gray-600 rounded-xl transition group cursor-pointer border border-gray-600 hover:border-red-500">
                        <div class="flex items-center gap-3">
                            <div class="bg-red-500/20 p-2 rounded-lg group-hover:bg-red-500 transition">
                                <i class="fa-solid fa-minus text-red-400 group-hover:text-white"></i>
                            </div>
                            <span class="font-medium">Add Expense</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-500"></i>
                    </a>

                    <a href="/smart-wallet-MVC/public/categories" class="flex items-center justify-between p-4 bg-gray-700 hover:bg-gray-600 rounded-xl transition group cursor-pointer border border-gray-600 hover:border-blue-500">
                        <div class="flex items-center gap-3">
                            <div class="bg-blue-500/20 p-2 rounded-lg group-hover:bg-blue-500 transition">
                                <i class="fa-solid fa-layer-group text-blue-400 group-hover:text-white"></i>
                            </div>
                            <span class="font-medium">Manage Categories</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-500"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 bg-gray-800 rounded-2xl p-6 shadow-xl">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">
                        <i class="fa-solid fa-clock-rotate-left text-gray-400"></i> Recent Transactions
                    </h3>
                    <a href="#" class="text-sm text-blue-400 hover:text-blue-300">View All</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-gray-400 text-sm border-b border-gray-700">
                                <th class="py-3 font-medium">Description</th>
                                <th class="py-3 font-medium">Category</th>
                                <th class="py-3 font-medium">Date</th>
                                <th class="py-3 font-medium text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td colspan="4" class="py-8 text-center text-gray-500 italic">
                                    No transactions found. Start by adding one!
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</body>
</html>