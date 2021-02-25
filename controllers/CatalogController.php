<?php

include_once 'W:/domains/test.com//models/Category.php';
include_once 'W:/domains/test.com//models/Product.php';

class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(12);

        require_once('W:/domains/test.com/views/catalog/index.php');

        return true;
    }
    
    public function actionCategory($categoryId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);
       
        require_once('W:/domains/test.com/views/catalog/category.php');

        return true;
    }

}
