<?php
// MySQL connection
$conn = new mysqli("localhost", "root", "", "Padma_Oil");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Oil Industry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Padma Oil Industry</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="products.php">Products</a>
            <a href="cart.html">Cart</a>
            <a href="contact.html" class="active">Contact</a>
        </nav>
    </header>

    <main>
        <section class="description">
            <h2>Pure, Cold-Pressed Cooking Oils</h2>
            <p>Fresh and chemical-free. Delivered to your doorstep.</p>
        </section>

        <section class="product-showcase">
            <h2>Our Edible Oils</h2>
            <div class="product-grid">
                <?php
                $result = $conn->query("SELECT * FROM products");
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product-card">';
                    echo '<img src="images/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                    echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                    echo '<p>₹' . htmlspecialchars($row['price']) . '</p>';
                    echo '<button>Add to Cart</button>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>

        <footer>
            <p>&copy; 2025 Padma Oil Industry</p>
        </footer>
    </main>
</body>
</html>

<?php $conn->close(); ?>
