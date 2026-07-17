<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<form method="post">
    <label for="">Product name</label>
    <input type="text" name="name">
    <br>
    <label for="">Product Price</label>
    <input type="number" name="price">
    <br>
    
    <label for="">Product type</label>
    <select name="type">
        <option value="" disabled>--Please choose an option--</option>
        <option value="food">Food</option>
        <option value="transport">Transport</option>
        <option value="toys">Toys</option>
        <option value="decoration">Decoration</option>
    </select>
    
    
    <br>
    <label for="" >Product Image</label>
    <input type="file" name="image">

    <br>
    <label for="">Product Quantity</label>
    <input type="number" name="qty">
    <br>
    <input type="submit">

</form> 

</body>
</html>

<?php

    include 'db.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $image = $_POST['image'];
        $qty = $_POST['qty'];

       $sql = "INSERT INTO `product`(`name`, `price`, `type`, `image`, `qty`) VALUES ('$name','$price','$type','$image','$qty')";
        mysqli_query($conn,$sql);
    }


?>