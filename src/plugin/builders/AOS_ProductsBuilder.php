<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/AOS_Products/AOS_ProductsMaincode.php';
require_once 'custom/include/beanbuilder/model/AOS_Products/AOS_ProductsCategory.php';
require_once 'custom/include/beanbuilder/model/AOS_Products/AOS_ProductsType.php';

class AOS_ProductsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('AOS_Products');
    }
    
    
    function maincode($maincode = '')
    {
        $this->bean->maincode = $maincode;
        return $this;
    }
	
    function part_number($part_number = '')
    {
        $this->bean->part_number = $part_number;
        return $this;
    }
	
    function category($category = '')
    {
        $this->bean->category = $category;
        return $this;
    }
	
    function type($type = '')
    {
        $this->bean->type = $type;
        return $this;
    }
	
    function cost($cost = '')
    {
        $this->bean->cost = $cost;
        return $this;
    }
	
    function cost_usdollar($cost_usdollar = '')
    {
        $this->bean->cost_usdollar = $cost_usdollar;
        return $this;
    }
	
    function currency_id($currency_id = '')
    {
        $this->bean->currency_id = $currency_id;
        return $this;
    }
	
    function price($price = '')
    {
        $this->bean->price = $price;
        return $this;
    }
	
    function price_usdollar($price_usdollar = '')
    {
        $this->bean->price_usdollar = $price_usdollar;
        return $this;
    }
	
    function url($url = '')
    {
        $this->bean->url = $url;
        return $this;
    }
	
    function contact_id($contact_id = '')
    {
        $this->bean->contact_id = $contact_id;
        return $this;
    }
	
    function contact($contact = '')
    {
        $this->bean->contact = $contact;
        return $this;
    }
	
    function product_image($product_image = '')
    {
        $this->bean->product_image = $product_image;
        return $this;
    }
	
    function file_url($file_url = '')
    {
        $this->bean->file_url = $file_url;
        return $this;
    }
	
    function aos_product_category_name($aos_product_category_name = '')
    {
        $this->bean->aos_product_category_name = $aos_product_category_name;
        return $this;
    }
	
    function aos_product_category_id($aos_product_category_id = '')
    {
        $this->bean->aos_product_category_id = $aos_product_category_id;
        return $this;
    }
	   
	
}