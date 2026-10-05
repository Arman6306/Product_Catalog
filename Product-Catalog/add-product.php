<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];

    $query = "INSERT INTO product
              (name, brand, price, color, size, weight, length, width, height)
              VALUES
              ('$name', '$brand', '$price', '$color', '$size', '$weight', '$length', '$width', '$height')";

    mysqli_query($conn, $query);

    header("Location: products.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Add Product</h1>

    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="brands.php">Brands</a>

    <h2>Add New Product</h2>

    <form method="POST">

        <p>
            <label>Product Name</label><br>
            <input type="text" name="name">
        </p>

        <p>
            <label>Brand</label><br>
            <input type="text" name="brand">
        </p>

        <p>
            <label>Price</label><br>
            <input type="number" name="price">
        </p>

        <p>
            <label>Color</label><br>
            <input type="text" name="color">
        </p>

        <p>
            <label>Size</label><br>
            <input type="text" name="size">
        </p>

        <p>
            <label>Weight (gram)</label><br>
            <input type="number" name="weight">
        </p>

        <p>
            <label>Length (cm)</label><br>
            <input type="number" name="length">
        </p>

        <p>
            <label>Width (cm)</label><br>
            <input type="number" name="width">
        </p>

        <p>
            <label>Height (cm)</label><br>
            <input type="number" name="height">
        </p>

        <button type="submit" name="submit">Add Product</button>

    </form>

</body>

</html>