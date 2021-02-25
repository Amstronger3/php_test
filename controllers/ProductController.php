<?php

include_once 'W:/domains/test.com/models/Category.php';
include_once 'W:/domains/test.com/models/Product.php';

class ProductController
{

    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $product = Product::getProductById($productId);
       
        require_once('W:/domains/test.com/views/product/view.php');

        return true;
    }
}
