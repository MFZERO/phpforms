<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Creating Select List from PHP Array Values</title>
</head>
<body>
<form action="../php/select-action.php" method="post">
    <select name="products">
        <option selected="selected">Choose one</option>
        <?php
        // A sample product array
        $products = array("Mobile", "Laptop", "Tablet", "Camera");
        
        // Iterating through the product array
        foreach($products as $item){
        ?>
        <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Submit">
</form>
</body>
</html>                                		