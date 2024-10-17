<?php
include 'database.php'; 
include 'massageballset_category.php'; 

$category = new MassageBallSetCategory($conn);  
$result = $category->read(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Categories - Massage Ball Set Store</title>
</head>
<body>
    <h1>Categories in Massage Ball Set Store</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Aisle Number</th>
        </tr>
        <?php
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['CategoryID'] . "</td>";
            echo "<td>" . $row['CategoryCode'] . "</td>";
            echo "<td>" . $row['CategoryName'] . "</td>";
            echo "<td>" . $row['AisleNumber'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>