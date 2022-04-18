<?php
include_once 'classes/Database.php';
include_once 'classes/Products.php';
include_once 'classes/ProductsContr.php';

    if(isset($_POST['Send'])){
        $addProduct = new ProductsContr();
        $addProduct->CreateProduct($_POST['SKU'],
                                $_POST['Name'],
                                $_POST['Price'],
                                $_POST['size'],
                                $_POST['weight'],
                                $_POST['height'],
                                $_POST['width'],
                                $_POST['length']);
    }


    if(isset($_POST['massDelete'])){
            $deleteProduct = new ProductsContr();
            $deleteProduct->RemoveProduct($_POST['delete-checkbox']);
            header("location:index.php");
    }

    if(isset($_POST['addProduct'])){
            header("location:addproduct.php");
    }

    if(isset($_POST['cancel'])){
        header("location:index.php");
    }
?>