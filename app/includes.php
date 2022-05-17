<?php
use App\Classes\ProductsContr;

require __DIR__.'/../vendor/autoload.php';

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
        
        header("location:/scandiweb/index.php");
    }


    if(isset($_POST['massDelete'])){
        $deleteProduct = new ProductsContr();
        $deleteProduct->RemoveProduct($_POST['delete-checkbox']);
        header("location:/scandiweb/index.php");
    }

    if(isset($_POST['addProduct'])){
        header("location:/scandiweb/app/view/pages/addproduct.php");
    }

    if(isset($_POST['cancel'])){
        header("location:/scandiweb/index.php");
    }
?>