<?php
include 'database.php';
include 'massageballset_product.php';

$product = new MassageBallSetProduct($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product->ProductCode = $_POST['productCode'];

    if ($product->delete()) {
        echo "Product successfully deleted!";
    } else {
        echo "Error deleting product.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product - Massage Ball Set Store</title>
</head>
<body>
    <h1>Delete a Product from Massage Ball Set Store</h1>
    <form method="POST" action="removeMassageBallSetProduct.test.php">
        <label for="productCode">Product Code:</label>
        <input type="text" id="productCode" name="productCode" required><br><br>

        <input type="submit" value="Delete Product">
    </form>
</body>
</html>
