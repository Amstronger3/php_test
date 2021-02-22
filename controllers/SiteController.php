<?php

include_once 'W:/domains/test.com/models/Category.php';
//include_once 'W:/domains/test.com/models/Product.php';

class SiteController
{

    public function actionIndex()
    {
//        $categories = array();
        $categories = Category::getCategoriesList();
        
        require_once('W:/domains/test.com/views/site/index.php');

        return true;
    }

}
