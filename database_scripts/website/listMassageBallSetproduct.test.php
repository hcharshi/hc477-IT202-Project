<?php
include 'database.php'; 
include 'massageballset_product.php'; 

$product = new MassageBallSetProduct($conn); 
$result = $product->read(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Products - Massage Ball Set Store</title>
</head>
<body>
    <h1>Products in Massage Ball Set Store</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th>Color</th>
            <th>Wholesale Price</th>
            <th>List Price</th>
        </tr>
        <?php
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['ProductID'] . "</td>";
            echo "<td>" . $row['ProductCode'] . "</td>";
            echo "<td>" . $row['ProductName'] . "</td>";
            echo "<td>" . $row['Description'] . "</td>";
            echo "<td>" . $row['Color'] . "</td>";
            echo "<td>" . $row['WholesalePrice'] . "</td>";
            echo "<td>" . $row['ListPrice'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>