<?php
include 'database.php'; 
include 'massageballset_category.php'; 

$category = new MassageBallSetCategory($conn); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get values from the form submission.
    $category->CategoryCode = $_POST['categoryCode'];
    $category->CategoryName = $_POST['categoryName'];
    $category->AisleNumber = $_POST['aisleNumber'];

    if ($category->update()) {
        echo "Category successfully updated!";
    } else {
        echo "Error updating category.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category - Massage Ball Set Store</title>
</head>
<body>
    <h1>Update a Category in Massage Ball Set Store</h1>
    <form method="POST" action="changeMassageBallSetCategory.test.php">
        <label for="categoryCode">Category Code:</label>
        <input type="text" id="categoryCode" name="categoryCode" required><br><br>

        <label for="categoryName">New Category Name:</label>
        <input type="text" id="categoryName" name="categoryName" required><br><br>

        <label for="aisleNumber">New Aisle Number:</label>
        <input type="number" id="aisleNumber" name="aisleNumber" required><br><br>

        <input type="submit" value="Update Category">
    </form>
</body>
</html>