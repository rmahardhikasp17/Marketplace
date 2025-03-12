<?php include 'header.php'; ?>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">All Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <?php
            // Contoh data produk
            $products = [
                ['name' => 'Product 1', 'price' => 100000, 'image' => 'https://via.placeholder.com/150'],
                ['name' => 'Product 2', 'price' => 200000, 'image' => 'https://via.placeholder.com/150'],
                ['name' => 'Product 3', 'price' => 300000, 'image' => 'https://via.placeholder.com/150'],
                ['name' => 'Product 4', 'price' => 400000, 'image' => 'https://via.placeholder.com/150'],
            ];

            foreach ($products as $product) {
                echo '
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="' . $product['image'] . '" alt="' . $product['name'] . '" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-xl font-semibold mb-2">' . $product['name'] . '</h3>
                    <p class="text-gray-700">Rp ' . number_format($product['price'], 0, ',', '.') . '</p>
                    <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add to Cart</button>
                </div>';
            }
            ?>
        </div>
    </div>

<?php include 'footer.php'; ?>
