<?php

class CartController
{
    
    public function actionAdd($id)
    {
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
//        echo '<pre>';print_r($_SESSION['products']);die();
    }
    
    public function actionAddAjax($id) 
    {
        echo Cart::addProduct($id);
        return true;
    }
    
    public function actionIndex() {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $productsInCart = false;
        
        $productsInCart = Cart::getProducts();
        
        if ($productsInCart){
            
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds); //delete s in Id`s
            
            $totalPrice = Cart::getTotalPrice($products);            
        }
        
        require_once ('W:/domains/test.com/views/cart/index.php');
        return true;
    }
    
}