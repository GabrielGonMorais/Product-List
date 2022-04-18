<?php

include_once 'Products.php';

class ProductsView extends Product {

    public function ShowProducts(){
        
        $products = $this->GetProducts();
        if ($products <> null){
            foreach ($products as $product) {
                $product = array_filter($product);
                ?>
                <link rel="stylesheet" type="text/css" href="main.css"/> 
                <div class="card">
                <input name="delete-checkbox[]" value="0" type="hidden">
                <input type="checkbox" name="delete-checkbox[]" class="delete-checkbox" value="<?=$product['ID'];?>">  
                <div class="textcard">
                <?php
    
                foreach($product as $key => $prop) {
                    $model = [
                        "ID" => "",
                        "SKU" => "$prop </br>",
                        "Name" => "$prop </br>",     
                        "Price" => " $prop $ </br>",
                        "Size" => "Size: $prop MB </br>" ,
                        "Weight" => "Weight: $prop KG </br>",
                        "Height" => "Dimension: $prop x ",
                        "Width" => "$prop x ",
                        "Length" => "$prop x ",
                    ];
                    print_r($model[$key]);
                }
                echo '</div>';
                echo '</div>';              
            }
        } else{
            echo "No products yet";
        }
                    
    }
}
?>