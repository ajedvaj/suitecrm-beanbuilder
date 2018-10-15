<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class AOS_Product_CategoriesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('AOS_Product_Categories');
    }
    
    
    function is_parent($is_parent = '')
    {
        $this->bean->is_parent = $is_parent;
        return $this;
    }
	
    function parent_category_name($parent_category_name = '')
    {
        $this->bean->parent_category_name = $parent_category_name;
        return $this;
    }
	
    function parent_category_id($parent_category_id = '')
    {
        $this->bean->parent_category_id = $parent_category_id;
        return $this;
    }
	   
	
}