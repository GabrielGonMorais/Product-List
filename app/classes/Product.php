<?php

namespace App\Classes;
require __DIR__.'/../../vendor/autoload.php';
class Product extends Database {

    public function GetProducts() {
        $command = "SELECT * FROM products ORDER BY id DESC";
        $result = $this->Connect()->query($command);
        return $result;
    //     $numRows = $result->num_rows;
    //     if ($numRows > 0) {
    //         while($row = $result->fetch_assoc()){
    //             $data[] = $row;
    //             return $data;
    //         }
    //    }   

    }

    protected function SetProduct($sku, $name, $price, $size, $weight, $height, $width, $length){
        $command = "INSERT INTO products(SKU, Name, Price, Size, Weight, Height, Width, Length) 
        VALUES ('$sku', '$name', '$price', '$size', '$weight', '$height', '$width', '$length')";
        $result = $this->Connect()->query($command);
        if($result){
            header("location:index.php");
        }
    }

    protected function DeleteProduct($allId){
        $getid = implode(',', $allId);
        $command = "DELETE FROM products WHERE id IN($getid)";
        $result = $this->Connect()->query($command);

        if($result){
            header("location:/../view/pages/index.php");
        } 
    }

}

?>