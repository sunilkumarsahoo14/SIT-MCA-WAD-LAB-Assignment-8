<?php
// Step 1: Define the associative array
$products = array(
    'product1' => array('name' => 'Laptop', 'price' => 800, 'stock' => 15),
    'product2' => array('name' => 'Smartphone', 'price' => 400, 'stock' => 20),
    'product3' => array('name' => 'Headphones', 'price' => 50, 'stock' => 50),
);

// i. Display the price of product2
echo "<h3>i. Price of product2:</h3>";
echo "The price of product2 (Smartphone) is ₹" . $products['product2']['price'] . "<br>";

// ii. Check if "product3" is in stock
echo "<h3>ii. Stock Status of product3:</h3>";
if ($products['product3']['stock'] > 0) {
    echo "Product3 (Headphones) is in stock.<br>";
} else {
    echo "Product3 (Headphones) is out of stock.<br>";
}

// iii. Calculate the average price of all products
$totalPrice = 0;
$totalProducts = count($products);
foreach ($products as $product) {
    $totalPrice += $product['price'];
}
$averagePrice = $totalPrice / $totalProducts;
echo "<h3>iii. Average Price of All Products:</h3>";
echo "The average price is ₹" . number_format($averagePrice, 2) . "<br>";

// iv. Display all product details in a table after applying a 10% discount
echo "<h3>iv. Product Details with 10% Discount:</h3>";
echo '<table class="table table-bordered table-striped">';
echo "<thead>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Discounted Price</th>
        </tr>
      </thead>";
echo "<tbody>";
foreach ($products as $id => $details) {
    $discountedPrice = $details['price'] * 0.9; // Apply 10% discount
    echo "<tr>
            <td>$id</td>
            <td>{$details['name']}</td>
            <td>₹{$details['price']}</td>
            <td>{$details['stock']}</td>
            <td>₹" . number_format($discountedPrice, 2) . "</td>
          </tr>";
}
echo "</tbody></table>";
?>
