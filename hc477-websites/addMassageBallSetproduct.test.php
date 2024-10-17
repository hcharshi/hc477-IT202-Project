<?php
include 'database.php'; 
include 'massageballset_product.php'; 

$product = new MassageBallSetProduct($conn); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product->ProductCode = $_POST['productCode'];
    $product->ProductName = $_POST['productName'];
    $product->Description = $_POST['description'];
    $product->Color = $_POST['color'];
    $product->CategoryID = $_POST['categoryID'];
    $product->WholesalePrice = $_POST['wholesalePrice'];
    $product->ListPrice = $_POST['listPrice'];

    if ($product->create()) {
        echo "Product successfully added!";
    } else {
        echo "Error adding product.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Massage Ball Set Store</title>
</head>
<body>
    <h1>Add a New Product to Massage Ball Set Store</h1>
    <form method="POST" action="addMassageBallSetProduct.test.php">
        <label for="productCode">Product Code:</label>
        <input type="text" id="productCode" name="productCode" required><br><br>

        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required><br><br>

        <label for="categoryID">Category ID:</label>
        <input type="number" id="categoryID" name="categoryID" required><br><br>

        <label for="wholesalePrice">Wholesale Price:</label>
        <input type="number" step="0.01" id="wholesalePrice" name="wholesalePrice" required><br><br>

        <label for="listPrice">List Price:</label>
        <input type="number" step="0.01" id="listPrice" name="listPrice" required><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
