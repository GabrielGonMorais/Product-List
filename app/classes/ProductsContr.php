<?php
namespace App\Classes;
require __DIR__.'/../../vendor/autoload.php';

class ProductsContr extends Product {
        public function CreateProduct($sku, $name, $price, $size, $weight, $height, $width, $length){
            $this->SetProduct($sku, $name, $price, $size, $weight, $height, $width, $length);
        }

        public function RemoveProduct($allId){
            $this->DeleteProduct($allId);
        }
}
?>