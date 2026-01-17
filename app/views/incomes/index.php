<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Incomes - Smart Wallet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="bg-gray-800 border-b border-gray-700 px-6 py-4 flex justify-between items-center mb-8">
        <h1 class="text-xl font-bold text-green-400">My Incomes</h1>
        <a href="/smart-wallet-MVC/public/dashboard" class="text-gray-400 hover:text-white transition">
            <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
        </a>
    </nav>

    <div class="container mx-auto px-6">
        
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Income History</h2>
            <a href="/smart-wallet-MVC/public/incomes/create" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition">
                <i class="fa-solid fa-plus"></i> Add New
            </a>
        </div>

        <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-700 text-gray-400 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4">Description</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">Amount</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    <?php if (!empty($incomes)): ?>
                        <?php foreach ($incomes as $income): ?>
                            <tr class="hover:bg-gray-750 transition">
                                <td class="px-6 py-4 text-gray-300"><?= $income->date ?></td>
                                <td class="px-6 py-4 font-medium"><?= $income->description ?></td>
                                <td class="px-6 py-4">
                                    <span class="bg-gray-700 text-green-400 text-xs px-2 py-1 rounded-full">
                                        <?= $income->category_name ?? 'Uncategorized' ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-green-400 font-bold">
                                    +$<?= number_format($income->amount, 2) ?>
                                </td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <a href="/smart-wallet-MVC/public/incomes/edit/<?= $income->id ?>" class="text-blue-400 hover:text-blue-300">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="/smart-wallet-MVC/public/incomes/delete/<?= $income->id ?>" class="text-red-400 hover:text-red-300" onclick="return confirm('Are you sure?');">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                No incomes found. start earning! 💸
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>