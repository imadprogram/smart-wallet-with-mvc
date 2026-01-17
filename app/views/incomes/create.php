<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Income - Smart Wallet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans h-screen flex items-center justify-center">

    <div class="max-w-md w-full bg-gray-800 rounded-2xl shadow-2xl overflow-hidden border border-gray-700">
        
        <div class="bg-gray-700 p-6 flex justify-between items-center">
            <h2 class="text-xl font-bold flex items-center gap-2">
                <i class="fa-solid fa-plus-circle text-green-400"></i> Add Income
            </h2>
            <a href="/smart-wallet-MVC/public/dashboard" class="text-gray-400 hover:text-white transition">
                <i class="fa-solid fa-xmark text-xl"></i>
            </a>
        </div>

        <div class="p-6">
            <form action="/smart-wallet-MVC/public/incomes/store" method="POST" class="space-y-6">
                
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Amount ($)</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3.5 text-gray-500">$</span>
                        <input type="number" step="0.01" name="amount" required 
                            class="w-full bg-gray-900 border border-gray-600 text-white text-lg rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent block pl-10 p-3"
                            placeholder="0.00">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Description</label>
                    <input type="text" name="description" required 
                        class="w-full bg-gray-900 border border-gray-600 text-white rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent block p-3"
                        placeholder="e.g. Salary, Freelance...">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Date</label>
                    <input type="date" name="date" required value="<?php echo date('Y-m-d'); ?>"
                        class="w-full bg-gray-900 border border-gray-600 text-white rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent block p-3">
                </div>

                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-xl transition duration-200 shadow-lg flex justify-center items-center gap-2">
                    <i class="fa-solid fa-check"></i> Save Income
                </button>
            </form>
        </div>
    </div>

</body>
</html>