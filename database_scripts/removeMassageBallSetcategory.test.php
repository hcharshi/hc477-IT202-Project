<?php
include 'database.php'; 
include 'massageballset_category.php'; 

$category = new MassageBallSetCategory($conn); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category->CategoryCode = $_POST['categoryCode'];

    if ($category->delete()) {
        echo "Category successfully deleted!";
    } else {
        echo "Error deleting category.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Category - Massage Ball Set Store</title>
</head>
<body>
    <h1>Delete a Category from Massage Ball Set Store</h1>
    <form method="POST" action="removeMassageBallSetCategory.test.php">
        <label for="categoryCode">Category Code:</label>
        <input type="text" id="categoryCode" name="categoryCode" required><br><br>

        <input type="submit" value="Delete Category">
    </form>
</body>
</html>