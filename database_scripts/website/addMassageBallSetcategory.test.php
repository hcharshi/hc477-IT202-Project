<?php
include 'database.php'; 
include 'massageballset_category.php'; 

$category = new MassageBallSetCategory($conn); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get values from the form submission.
    $category->CategoryCode = $_POST['categoryCode'];
    $category->CategoryName = $_POST['categoryName'];
    $category->AisleNumber = $_POST['aisleNumber'];

    if ($category->create()) {
        echo "Category successfully added!";
    } else {
        echo "Error adding category.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category - Massage Ball Set Store</title>
</head>
<body>
    <h1>Add a New Category to Massage Ball Set Store</h1>
    <form method="POST" action="addMassageBallSetCategory.test.php">
        <label for="categoryCode">Category Code:</label>
        <input type="text" id="categoryCode" name="categoryCode" required><br><br>

        <label for="categoryName">Category Name:</label>
        <input type="text" id="categoryName" name="categoryName" required><br><br>

        <label for="aisleNumber">Aisle Number:</label>
        <input type="number" id="aisleNumber" name="aisleNumber" required><br><br>

        <input type="submit" value="Add Category">
    </form>
</body>
</html>
