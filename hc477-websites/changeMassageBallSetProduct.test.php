<?php
include 'database.php'; 
include 'massageballset_product.php'; 

$product = new MassageBallSetProduct($conn); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product->ProductCode = $_POST['productCode'];
    $product->ProductName = $_POST['productName'];
    $product->Description = $_POST['description'];
    $product->Color = $_POST['color'];
    $product->WholesalePrice = $_POST['wholesalePrice'];
    $product->ListPrice = $_POST['listPrice'];

    // Attempt to update the product and provide feedback.
    if ($product->update()) {
        echo "Product successfully updated!";
    } else {
        echo "Error updating product.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product - Massage Ball Set Store</title>
</head>
<body>
    <h1>Update a Product in Massage Ball Set Store</h1>
    <form method="POST" action="changeMassageBallSetProduct.test.php">
        <label for="productCode">Product Code:</label>
        <input type="text" id="productCode" name="productCode" required><br><br>

        <label for="productName">New Product Name:</label>
        <input type="text" id="productName" name="productName" required><br><br>

        <label for="description">New Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="color">New Color:</label>
        <input type="text" id="color" name="color" required><br><br>

        <label for="wholesalePrice">New Wholesale Price:</label>
        <input type="number" step="0.01" id="wholesalePrice" name="wholesalePrice" required><br><br>

        <label for="listPrice">New List Price:</label>
        <input type="number" step="0.01" id="listPrice" name="listPrice" required><br><br>

        <input type="submit" value="Update Product">
    </form>
</body>
</html>