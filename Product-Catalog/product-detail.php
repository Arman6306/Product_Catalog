<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM product WHERE id = $id");

$product = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Detail</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Product Detail</h1>

    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="brands.php">Brands</a>

    <h2><?php echo $product['name']; ?></h2>

    <div class="product">

        <p>Brand: <?php echo $product['brand']; ?></p>
        <p>Price: $<?php echo $product['price']; ?></p>
        <p>Color: <?php echo $product['color']; ?></p>
        <p>Size: <?php echo $product['size']; ?></p>
        <p>Weight: <?php echo $product['weight']; ?> g</p>

        <p>
            Dimensions:
            <?php echo $product['length']; ?> x
            <?php echo $product['width']; ?> x
            <?php echo $product['height']; ?> cm
        </p>

    </div>

</body>

</html>