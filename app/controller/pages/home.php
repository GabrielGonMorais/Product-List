<?php

namespace App\Controller\Pages;

use App\Classes\ProductsView;

class Home {

   
    static function GetHomeView(){
        $file = __DIR__.'/../../view/pages/home.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    static function Render($vars){
        $content = self::GetHomeView();

        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);
        return str_replace($keys, array_values($vars), $content);
    }

    public static function GetHome()
    { 
        $products = new ProductsView();
        return Home::Render([
            'content' => $products->ShowProducts()
        ]);
    }

}   

?>