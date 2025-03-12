<?php include 'header.php'; ?>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Your Cart</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left">Product</th>
                        <th class="text-left">Price</th>
                        <th class="text-left">Quantity</th>
                        <th class="text-left">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Contoh data keranjang
                    $cartItems = [
                        ['name' => 'Product 1', 'price' => 100000, 'quantity' => 2],
                        ['name' => 'Product 2', 'price' => 200000, 'quantity' => 1],
                    ];

                    foreach ($cartItems as $item) {
                        $total = $item['price'] * $item['quantity'];
                        echo '
                        <tr>
                            <td class="py-2">' . $item['name'] . '</td>
                            <td class="py-2">Rp ' . number_format($item['price'], 0, ',', '.') . '</td>
                            <td class="py-2">' . $item['quantity'] . '</td>
                            <td class="py-2">Rp ' . number_format($total, 0, ',', '.') . '</td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
            <div class="mt-6 text-right">
                <p class="text-xl font-semibold">Total: Rp 400,000</p>
                <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Checkout</button>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
