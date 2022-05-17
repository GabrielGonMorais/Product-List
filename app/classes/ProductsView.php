<?php
namespace App\Classes;
require __DIR__.'/../../vendor/autoload.php';

class ProductsView extends Product {

    public function ShowProducts(){
        ?>
        <form action="/../ScandiWeb/app/includes.php" method="POST">
        <header class="header">
        <div class="appName">Product List</div>
        <button type="submit" name="massDelete" class="button">
          MASS DELETE
        </button>
        <button class="button" name="addProduct">ADD</button>
        </header>
        <?php
        echo '<div class="listscreen">';
        echo '<div class="container">';
        $products = $this->GetProducts();
        if ($products <> null){
            foreach ($products as $product) {
                $product = array_filter($product);
                ?>
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
                        "Length" => "$prop",
                    ];
                    echo ($model[$key]);
                }
                echo '</div>';
                echo '</div>';  
                echo '</form>';            
            }
        } else{
            echo "No products yet";
        }    
    }
}
?>