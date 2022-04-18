<?php
include_once 'classes/Database.php';
include_once 'classes/Products.php';
include_once 'classes/ProductsView.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="main.css"/> 
</head>

<body>
<form action="includes.php" method="POST">
<header class="header">
    <div class="appName">Product List</div>
        <button type="submit" name="massDelete" class="button">MASS DELETE</button>
        <button class="button" name="addProduct">ADD</button>
</header>


<div class="listscreen">   
    <div class="container"> 
        
    <?php
        $products = new ProductsView();
        $products->ShowProducts();
    ?>

</form>
</body>
</html>