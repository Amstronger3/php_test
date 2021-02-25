<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart' => 'cart/index',
    
    '' => 'site/index',
    

    
);
