<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];

    $query = "UPDATE product SET
              name = '$name',
              brand = '$brand',
              price = '$price',
              color = '$color',
              size = '$size',
              weight = '$weight',
              length = '$length',
              width = '$width',
              height = '$height'
              WHERE id = $id";

    mysqli_query($conn, $query);

    header("Location: products.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM product WHERE id = $id");

$product = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Edit Product</h1>

    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="brands.php">Brands</a>

    <h2>Edit <?php echo $product['name']; ?></h2>

    <form method="POST">

        <p>
            <label>Product Name</label><br>
            <input type="text" name="name" value="<?php echo $product['name']; ?>">
        </p>

        <p>
            <label>Brand</label><br>
            <input type="text" name="brand" value="<?php echo $product['brand']; ?>">
        </p>

        <p>
            <label>Price</label><br>
            <input type="number" name="price" value="<?php echo $product['price']; ?>">
        </p>

        <p>
            <label>Color</label><br>
            <input type="text" name="color" value="<?php echo $product['color']; ?>">
        </p>

        <p>
            <label>Size</label><br>
            <input type="text" name="size" value="<?php echo $product['size']; ?>">
        </p>

        <p>
            <label>Weight (gram)</label><br>
            <input type="number" name="weight" value="<?php echo $product['weight']; ?>">
        </p>

        <p>
            <label>Length (cm)</label><br>
            <input type="number" name="length" value="<?php echo $product['length']; ?>">
        </p>

        <p>
            <label>Width (cm)</label><br>
            <input type="number" name="width" value="<?php echo $product['width']; ?>">
        </p>

        <p>
            <label>Height (cm)</label><br>
            <input type="number" name="height" value="<?php echo $product['height']; ?>">
        </p>

        <button type="submit" name="update">Update Product</button>

    </form>

</body>

</html>