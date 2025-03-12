<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link href="/assets/css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <!-- Logo -->
                    <a href="index.php" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-500 text-lg">Marketplace</span>
                    </a>
                    <!-- Menu -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="index.php" class="py-4 px-2 text-gray-500 hover:text-green-500">Home</a>
                        <a href="products.php" class="py-4 px-2 text-gray-500 hover:text-green-500">Products</a>
                        <a href="cart.php" class="py-4 px-2 text-gray-500 hover:text-green-500">Cart</a>
                    </div>
                </div>
                <!-- Search Bar -->
                <div class="flex items-center">
                    <input type="text" placeholder="Search products..." class="px-4 py-2 border rounded-l-lg focus:outline-none">
                    <button class="bg-green-500 text-white px-4 py-2 rounded-r-lg hover:bg-green-600">Search</button>
                </div>
            </div>
        </div>
    </nav>
