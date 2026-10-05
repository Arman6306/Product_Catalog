<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM product");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Products</h1>

    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="brands.php">Brands</a>

    <h2>Our Products</h2>

    <a href="add-product.php">Add New Product</a>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <div class="product">

            <h3>
                <a href="product-detail.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['name']; ?>
                </a>
            </h3>

            <p>Brand: <?php echo $row['brand']; ?></p>
            <p>Price: $<?php echo $row['price']; ?></p>
            <p>Color: <?php echo $row['color']; ?></p>
            <p>Size: <?php echo $row['size']; ?></p>

            <p>
                <a href="edit-product.php?id=<?php echo $row['id']; ?>">
                    Edit
                </a>

                <a href="delete-product.php?id=<?php echo $row['id']; ?>">
                    Delete
                </a>
            </p>

        </div>

    <?php } ?>

</body>

</html>